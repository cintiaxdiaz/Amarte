<?php

namespace App\Models;

use App\Models\ProductoFoto;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function fotos()
    {
        return $this->hasMany(ProductoFoto::class);
    }
}