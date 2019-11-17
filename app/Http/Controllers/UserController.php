<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if(request()->has('empty'))
        {
            $user = [];
        }
        else
        {
            $user = [ 'Joels', 'Juan', 'Alberto', 'Anabel', 'Milagritos', '<script>alert("noooo")</script>' ];
        }

        
        return view('users.index', [
            'users' => $user,
            'title' => 'Listado de Usuarios'
        ]);
    }

    public function crearUsuario()
    {
        return "Crear nuevo usuario";
    }
    

    public function mostrarUsuario($id)
    {
        return view('users.show', [
            'id' => $id
        ]);
        //return "Mostrando detalle del usuario: {$id}";
    }
}
