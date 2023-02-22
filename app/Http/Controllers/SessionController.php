<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create() {
        
        return view('auth.login');
    }

    public function store(){
        if(auth()->attempt(request(['email','password'])) ==false){
            return back()->withErrors([
                'message'=>'El correo o la contraseña son incorrectas',
            ]);
         } else{
                if(auth()->user()->role =='admin'){ 
                    return redirect()->route('admin.index');
            }else{
                
                return redirect()->to('/');
            }
        }

       
    }

    //aqui se usa esta linea para cerrar sesion
    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
}  
