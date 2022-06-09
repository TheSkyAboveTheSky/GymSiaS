<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeCreneau extends Model
{
    use HasFactory;

    public $table = 'demande_creneau';
    public function user(){
        return $this->BelongsTo(User::class, 'user_id', 'id');
    }
    public function seance(){
        return $this->BelongsTo(Seance::class,'seance_id','id');
    }
}
