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
        'salle_id',
    ];
    public function Difference()
    {
        return Carbon::parse($this->end_time)->diffInMinutes($this->start_time);
    }
    public function salle(){
        return $this->belongsTo(Salle::class,'salle_id');
    }
    public function coach(){
        return $this->belongsTo(User::class,'coach_id');
    }
}

        

