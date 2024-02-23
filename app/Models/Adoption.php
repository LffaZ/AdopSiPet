<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function pet()
    {
        return $this->belongsTo(Pet::class, 'kd_pet', 'kd');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_pengadopsi');
    }
    public function petcontributor()
    {
        return $this->belongsTo(PetContributor::class, 'id_penyedia');
    }
}
