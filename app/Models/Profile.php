<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    // relacion hasOne "tiene uno "
    public function location()
    {
        return $this->hasOne(Location::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

}
