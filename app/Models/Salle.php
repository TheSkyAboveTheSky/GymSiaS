<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;
    protected $fillable = [
        'salle_id',
        'salle_name',
        'salle_adresse',
        'adresse',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
