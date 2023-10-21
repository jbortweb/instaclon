<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth"); //Añadimos el constructor para que solo lleve a la vista dashboard a usuarios autentificados
    }
    public function index(){
        return view("dashboard");
    }
}
