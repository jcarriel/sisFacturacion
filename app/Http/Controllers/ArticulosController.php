<?php

namespace sisventas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use sisventas\Models\Articulo;

class ArticulosController extends Controller
{
    public function index()
    {
        $users = DB::table('articulo')->get();
        return view('articulos.index',compact('users'));
    }

}
