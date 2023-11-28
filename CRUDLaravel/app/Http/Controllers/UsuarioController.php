<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    public function viewCadastro()
    {
        return view('cadastrarUsuario');
    }

    public function cadastrarUsuario(Request $request)
    {
        $usuario = new User();
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->save();
        return redirect('/listarUsuarios');
    }

    public function listarUsuarios()
    {
        return view('listarUsuarios');
    }
}
