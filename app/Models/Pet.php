<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    // protected $guarded = ['id', 'kd_petdetail', 'kd_pethealth'];
    protected $fillable = [
        'nama',
        'category',
        'stts_kepemilikan',
        'harga',
        'id_petcontributor',
    ];

    // Parent Table (yg primary keynya di tabel pet):
    public function petdetail()
    {
        return $this->hasOne(PetDetail::class, 'kd_petdetail');
    }
    public function pethealth()
    {
        return $this->hasOne(PetHealth::class, 'kd_pethealth');
    }
    public function petcontributor()
    {
        return $this->belongsTo(PetContributor::class, 'id_petcontributor');
    }

    // Child Table (yg memiliki kd_pet):
    public function adoption()
    {
        return $this->hasOne(Adoption::class);
    }
    public function petphoto()
    {
        return $this->hasMany(PetPhoto::class);
    }
    public function favorit()
    {
        return $this->hasMany(Favorit::class);
    }
}
