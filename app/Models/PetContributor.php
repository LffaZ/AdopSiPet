<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Contracts\Auth\Authenticatable;
// auth dibawah mau dirubah
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class PetContributor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    // use AuthenticatableTrait;

    protected $table = 'pet_contributors';
    protected $guard = 'petcontributor';
    protected $guarded = ['id'];
    public function pet()
    {
        return $this->hasMany(Pet::class);
    }
    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
