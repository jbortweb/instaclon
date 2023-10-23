<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request){

        // dd($request->get('name'));
        // $request nos desvuelve toda la informacion del formaulario, con dd lo vemos en pantalla


        //Modificar el request. El username se guarda como slug y hay que evitar su duplicado, al crear la migracion ya se señala como unique

        $request->request->add(['username'=>Str::slug($request->username)]); //Str da directrices para guardar el nombre de usuario con espacios)

        //Validacion

        $this->validate($request, [
            'name' => 'required|max:20',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6'
        ]);

        User::create([
            'name'=> $request->name,
            'username' => $request->username,
             'email' => $request->email,
             'password'=> Hash::make($request->password), //Hash encripta la contraseña
        ]);

        //Autentificar usuario y contraseña

        auth()->attempt($request->only('email','password'));


        //Redireccionar al usuario

        return redirect()->route('posts.index',auth()->user()->username);
    }

}
