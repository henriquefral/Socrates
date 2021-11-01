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
    protected $fillable = [
        'name',
        'experience',
        'cpf',
        'birth_date',
        'occupation',
        'email',
        'password',
        'level_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        //'password',
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
     *
     * protected $appends = [
     *   'profile_photo_url',
     * ];
    */

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function tome() 
    {
        return $this->hasOne(Tome::class);
    }

    public function task() 
    {
        return $this->hasOne(Task::class);
    }
    public function parchment() 
    {
        return $this->hasOne(Parchment::class);
    }
    public function note() 
    {
        return $this->hasOne(Note::class);
    }
    public function exam() 
    {
        return $this->hasOne(Exam::class);
    }
}
