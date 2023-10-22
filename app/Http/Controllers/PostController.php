<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth"); //Añadimos el constructor para que solo lleve a la vista dashboard a usuarios autentificados
    }
    public function index(User $user){ //Utilizamos el nombre del usuario en la url de las rutas, lo cogemos del modelo User
        return view("dashboard", ["user"=>$user]);
    }
}
