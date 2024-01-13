<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetPhoto extends Model
{
    use HasFactory;
    protected $guarded = ['kd'];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}