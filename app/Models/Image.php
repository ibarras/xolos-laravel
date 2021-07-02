<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    // se define una tabla polimorfica uno a uno, y tambien se tiene que definir en la entidad que lo
    // va a utilizar ejemplo: tabla post, user.

    public function imageable()
    {
        return $this->morphTo();
    }

}
