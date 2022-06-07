<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Seance extends Model
{
    use HasFactory;
    public $table = 'seances';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillable = [
        'weekday',
        'end_time',
        'coach_id',
        'start_time',
        'created_at',
        'updated_at',
        'deleted_at',
        'activite',
        'user_id',
    ];
    const WEEK_DAYS = [
        '1' => 'Monday',
        '2' => 'Tuesday',
        '3' => 'Wednesday',
        '4' => 'Thursday',
        '5' => 'Friday',
        '6' => 'Saturday',
        '7' => 'Sunday',
    ];
    public function getDifferenceAttribute()
    {
        return Carbon::parse($this->end_time)->diffInMinutes($this->start_time);
    }
    public function salle(){
        return $this->belongsTo(Salle::class,'salle_id');
    }
    public function coach(){
        return $this->belongsTo(User::class,'coach_id');
    }
    public static function isTimeAvailable($weekday, $startTime, $endTime, $salle, $coach, $seance)
    {
        $seances = self::where('weekday', $weekday)
            ->when($seance, function ($query) use ($seance) {
                $query->where('id', '!=', $seance);
            })
            ->where(function ($query) use ($salle, $coach) {
                $query->where('class_id', $salle)
                    ->orWhere('teacher_id', $coach);
            })
            ->where([
                ['start_time', '<', $endTime],
                ['end_time', '>', $startTime],
            ])
            ->count();

        return !$seances;
    }
    public function scopeCalendarByRoleOrClassId($query)
    {
        return $query->when(!request()->input('salle_id'), function ($query) {
            $query->when(auth()->user()->is_coach, function ($query) {
                $query->where('coach_id', auth()->user()->id);
            })
                ->when(auth()->user()->is_student, function ($query) {
                    $query->where('salle_id', auth()->user()->salle_id ?? '0');
                });
        })
            ->when(request()->input('salle_id'), function ($query) {
                $query->where('salle_id', request()->input('salle_id'));
            });
    }
}

        

