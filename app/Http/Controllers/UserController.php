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

        // $data = request()->all();
        $data = request()->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:users,email',
            'clave' => 'required|min:6'
        ],[
            'nombre.required' => 'campo nombre es obligatorio',
            'correo.unique' => 'el correo electronica ya se encuentra registrado',
            'correo.email' => 'Correo electronico no valido',
            'clave.min' => 'recuerda que la clave debe ser minimo 6 caracteres'
        ]);
 
        User::create([
        'name' => $data['nombre'],
        'email' => $data['correo'],
        'password' => bcrypt($data['clave'])
        ]);

        return redirect()->route('users');
    }

    // public function update(User $user){

    //   dd($user->id);
    //     $data = request()->validate([
    //         'nombre' => 'required',
    //         'correo' => 'email',
    //         'clave' => '',
    //     ]);
               

            
    //     $user->update(request()->all());
            
    //     return redirect()->route('users');
    // }

    public function update(Request $request,User $user)
    {
        request()->validate([
            'nombre' => 'required',
            'clave' => 'required',
        ]);

        $datos = $request->all();
        
        $user->update($request->all());
        return redirect()->route('users')
                        ->with('success','Member updated successfully');
    }

    public function edit(User $user){
        
        // $user = '20';

        return view('users.edit',compact('user'));
    }

    public function destroy(User $user){

        $user->delete();
        return redirect()->route('users');
    }

}
