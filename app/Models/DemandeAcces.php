<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeAcces extends Model
{
    use HasFactory;

    public function user(){
        return $this->BelongsTo(User::class, 'user_id', 'id');
    }
    public function seance(){
        return $this->BelongsTo(Seance::class,'seance_id','id');
    }
}
