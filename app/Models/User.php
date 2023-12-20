<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function blogs(){
        return $this->hasMany(Blog::class);
    }

    public function likedBlogs(){
        return $this->belongsToMany(Blog::class, 'like_blog_user', 'user_id', 'blog_id');
    }

    public function commentsBlogs(){
        return $this->belongsToMany(Blog::class,'comment_blog_user', 'user_id', 'blog_id')->withPivot('comentario');
    }

    public function reseña(){
        return $this->hasOne(Reseña::class);
    }

    public function productos(){
        return $this->belongsToMany(Producto::class, "producto_user", 'user_id', 'producto_id')->withPivot('pago', 'cantidad');
    }

    public function servicos(){
        return $this->hasMany(Servicio::class);
    }
}
