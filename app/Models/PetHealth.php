<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetHealth extends Model
{
    use HasFactory;

    protected $fillable = ['Foto_cekdokter', 'Stts_vaksin', 'Stts_steril', 'Riwayat_penyakit'];
    public function pet()
    {
        return $this->hasOne(Pet::class);
    }
}
