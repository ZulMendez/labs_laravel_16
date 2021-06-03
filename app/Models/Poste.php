<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function testimonials()
    {
        return $this->hasMany(Teams::class);
    }
    public function teams()
    {
        return $this->hasMany(Teams::class);
    }
}
