<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){

        $users = User::all();
       
        return view('users.index', [
            'users'=> $users,
            'title'=> 'Listado de usuarios'
        ]);
    }

    public function show($id){

        $user= User::findOrFail($id);

        
    return view('users.show',compact('user'));

    }

    public function create(){

        return view('users.create');
    }

    public function store(){

        $data = request()->all();
 
        User::create([
        'name' => $data['nombre'],
        'email' => $data['correo'],
        'password' => bcrypt($data['clave'])
        ]);

        return redirect()->route('users');
    }

    public function edit(){

        return redirect()->route('users');
    }

    public function destroy(User $user){

        $user->delete();
        return redirect()->route('users');
    }

}
