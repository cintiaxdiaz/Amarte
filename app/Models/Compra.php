<?php

namespace App\Models;

use App\Models\CompraProducto;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    public $timestamps = false;

    protected $table = 'compra';


    public function compraProductos()
    {

        return $this->hasMany(CompraProducto::class, "compra_id");
    }
}
