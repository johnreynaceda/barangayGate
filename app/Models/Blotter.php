<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blotter extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function resident()
    {
        return $this->belongsTo(Resident::class);
    }
}