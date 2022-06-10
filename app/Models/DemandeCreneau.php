<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeCreneau extends Model
{
    use HasFactory;

    public $table = 'demande_creneau';
    protected $fillable =[
        'user_id',
        'seance_id',
        'weekday',
        'start_time',
        'end_date',
    ];

    public function user(){
        return $this->BelongsTo(User::class, 'user_id', 'id');
    }
    public function seance(){
        return $this->BelongsTo(Seance::class,'seance_id','id');
    }
}
