<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //Mostrar todos Posts
        return Post::all();
    }

    public function store(Request $request)
    {
        //Criar Post
        $Postagem = new Post;

        $Postagem->usuario = $request->usuario;
        $Postagem->titulo = $request->titulo;
        $Postagem->descricao= $request->descricao;

        $Postagem->save();
    }

    public function show(Request $request, $id)
    {
        //Mostrar um Post
        return Post::find($id);
    }

    public function edit(Request $request, $id)
    {
        //Editar Post
        $Postagem = Post::find($id);

        $Postagem->usuario = $request->usuario;
        $Postagem->titulo = $request->titulo;
        $Postagem->descricao= $request->descricao;

        $Postagem->save();
    }

    public function destroy(Request $request, $id)
    {
        //Remover Post
        $Postagem = Post::find($id);
        $Postagem->delete();
    }
}
