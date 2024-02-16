<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'feedbacks';
    protected $fillable = ['rating', 'message', 'id_pengadopsi'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function petcontributor()
    {
        return $this->belongsTo(PetContributor::class);
    }
}
