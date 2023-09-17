<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function blotters()
    {
        return $this->hasMany(Blotter::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}