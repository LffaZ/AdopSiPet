<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetDetail extends Model
{
    use HasFactory;

    protected $guarded = ['kd'];
    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}

// satu pet detail punya satu pet
// pet health punya sa