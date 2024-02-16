<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetHealth extends Model
{
    use HasFactory;

    protected $fillable = ['foto_cekdokter', 'stts_vaksin', 'stts_steril', 'riwayat_penyakit', 'kd_pet'];
    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
