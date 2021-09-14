<?php

namespace App\Models;

use App\Models\Producto;




use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompraProducto extends Model
{
    public $timestamps = false;
    protected $table = 'compra_producto';

    public function producto()
    {

        return $this->belongsTo(Producto::class);
    }
}