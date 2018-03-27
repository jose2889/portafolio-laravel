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
        return view('users.index', [
            'users'=> $users,
            'title'=> 'Listado de usuarios'
        ]);
    }

    public function show($id){
    return view('users.show',[
        'id'=>$id
    ]);

    }

    public function create(){
        return "Crear nuevo usuario";
    }
}
