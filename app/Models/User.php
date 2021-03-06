<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


     // relacion hasOne "tiene uno "
     public function profile()
     {
         return $this->hasOne(Profile::class);
     }

     // relaciones belongsTo "pertenece a"

     public function level()
     {
         return $this->belongsTo(Level::class);
     }

     // relaciones  " pertenece a muchos "

     public function groups()
     {
         return $this->belongsToMany(Group::class)->withTimestamps();
     }

     // obtener informacion " atra vez de "
     // Define a has-one-through relationship. -> Defina una relación de uno a uno.
     // un usuario tiene una localizacion atra vez de perfil
     public function location()
     {
         return $this->hasOneThrough(Location::class, Profile::class );
     }

    //  public function comments()
    //  {
    //      return $this->hasMany(Comment::class);
    //  }

     // un usuario tiene muchos post (hasMany)

     public function posts()
     {
         return $this->hasMany(Post::class);
     }

     public function image()
     {
         return $this->morphOne(Image::class, 'imageable');
     }
}
