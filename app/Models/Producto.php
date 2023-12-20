<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function users(){
        return $this->belongsToMany(User::class,"producto_user", "producto_id", "user_id")->withPivot('pago', 'cantidad');
    }
}
