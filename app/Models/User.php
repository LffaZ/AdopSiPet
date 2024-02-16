<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $fillable = [
        'nama',
        'email',
        'jenkel',
        'no_hp',
        'tgl_lahir',
        'password',
    ];

    public function useraddress()
    {
        return $this->hasMany(UserAddress::class);
    }
    public function adoption()
    {
        return $this->hasMany(Adoption::class);
    }
    public function favorit()
    {
        return $this->hasMany(Favorit::class);
    }
    public function searchhistory()
    {
        return $this->hasMany(SearchHistory::class);
    }
    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
    // public function 

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
