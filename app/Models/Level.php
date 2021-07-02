<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    // Tiene muchos Post atravez (hasManyThrough) de usuarios
    public function posts()
    {
        return $this->hasManyThrough(Post::class, User::class);
    }


}
