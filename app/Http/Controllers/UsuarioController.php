<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = new Usuario();
        return view('usuarios.create',compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->NombreUsuario = $request->NombreUsuario;
        $usuario->CedulaUsuario = $request->CedulaUsuario;
        $usuario->TelefonoUsuario = $request->TelefonoUsuario;
        $usuario->CiudadUsuario = $request->CiudadUsuario;
        $usuario->NicknameUsuario = $request->NicknameUsuario;
        $usuario->PasswordUsuario = $request->PasswordUsuario;
        $usuario->RolUsuario = $request->RolUsuario;
        $usuario->save();
        session()->flash("flash.banner","Usuario creado satisfactoriamente");
        return Redirect::route("usuarios.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        return view('usuarios.show',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        $usuario->NombreUsuario = $request->NombreUsuario;
        $usuario->CedulaUsuario = $request->CedulaUsuario;
        $usuario->TelefonoUsuario = $request->TelefonoUsuario;
        $usuario->CiudadUsuario = $request->CiudadUsuario;
        $usuario->NicknameUsuario = $request->NicknameUsuario;
        $usuario->PasswordUsuario = $request->PasswordUsuario;
        $usuario->RolUsuario = $request->RolUsuario;
        $usuario->save();
        session()->flash("flash.banner","Usuario editado satisfactoriamente");
        return Redirect::route("usuarios.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        session()->flash("flash.banner","Usuario eliminado satisfactoriamente");
        return Redirect::route("usuarios.index");
    }
}
