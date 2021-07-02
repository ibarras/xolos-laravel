<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    // un grupo puede tener muchos usuarios relacion uno a muchos
    public function users()
    {
        // withTimestamps() para que se llenen automaticamente los metodos creat_at, update_at

        return $this->belongsToMany(User::class)->withTimestamps();
    }

}
