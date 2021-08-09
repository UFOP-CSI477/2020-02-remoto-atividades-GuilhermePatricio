<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if(Auth::check()){
            $user = User::orderby('nome')->get();
            return view('usuarios.index', ['users' => $user]);
        }

        session()->flash('mensagem', 'Operação negada, faça o login para continuar!');
        return redirect()->route('login');
    }

  
}
