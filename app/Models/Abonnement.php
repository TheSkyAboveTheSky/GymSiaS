<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    use HasFactory;
    protected $fillable = [
        'duree',
        'salle_id',
        'prix',
    ];
    public function salle(){
        return $this->belongsTo(Salle::class,'salle_id');
    }
}
