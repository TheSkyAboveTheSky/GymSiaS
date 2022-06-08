<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    public $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'salle_id',
        'seance_id',
        'abonnement_expired_at',
        'date_debut_abonnement',
        'duree_abonement_in_months',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
        'abonnement_expired_at',
        'abonnement_expired_at,'
    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function salle()
    {
        return $this->belongsTo(Salle::class);
    }
    public function getIsAdminAttribute()
    {
        return $this->roles()->where('id', 2)->exists();
    }

    public function getIsCoachAttribute()
    {
        return $this->roles()->where('id', 1)->exists();
    }

    public function getIsClientAttribute()
    {
        return $this->roles()->where('id', 0)->exists();
    }

    public function CoachSeances()
    {
        return $this->hasMany(Seance::class, 'coach_id', 'id');
    }

}
