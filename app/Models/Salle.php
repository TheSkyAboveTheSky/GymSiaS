<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;
    public $table = 'salles';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillable = [
        'salle_id',
        'salle_name',
        'salle_adresse',
        'adresse',
    ];
    public function salleSeances()
    {
        return $this->hasMany(Seance::class, 'salle_id', 'id');
    }

    public function salleUsers()
    {
        return $this->hasMany(User::class, 'salle_id', 'id');
    }
}
