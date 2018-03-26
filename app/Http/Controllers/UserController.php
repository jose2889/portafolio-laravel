<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $users = [
            'jose',
            'pedro',
            'juan',
            'javier',
        ];
        return view('users', [
            'users'=> $users,
            'title'=> 'Listado de usuarios'
        ]);
    }

    public function show($id){
    return "mostrando detalles del usuario: {$id}";

    }

    public function create(){
        return "Crear nuevo usuario";
    }
}
