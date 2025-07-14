<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

abstract class Controller
{
    public function index(){
        $categorias = Categoria::with('categoria')->get();
        return view('categorias.index', compact('Categoria'));
    }
}
