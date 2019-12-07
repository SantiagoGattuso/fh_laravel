<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
    public function listado(){
      $productos = Producto::all();
      $vac = compact("productos");
      return view("productos", $vac);
    }
}
