<?php

namespace App\Http\Controllers;

use App\Models\Commentario;
use App\Http\Requests\StoreCommentarioRequest;
use App\Http\Requests\UpdateCommentarioRequest;
use Illuminate\Http\Request;

class CommentarioController extends Controller
{
    public function index()
    {
        //Mostrar todos Posts
        return Commentario::all();
    }

    public function store(Request $request, $id)
    {
        //Criar Post
        $Comentario = new Commentario;

        $Comentario->usuario = $request->usuario;
        $Comentario->descricao= $request->descricao;
        $Comentario->fk_postagem_id= $id;

        $Comentario->save();
    
    }

    public function show(Request $request, $id)
    {
        //Mostrar um Post
        return Commentario::find($id);
    }

    public function edit(Request $request, $id)
    {
        //Editar Post
        $Comentario=Commentario::find($id);

        $Comentario->usuario = $request->usuario;
        $Comentario->descricao= $request->descricao;

        $Comentario->save();
    
    }

    public function destroy(Request $request,$id)
    {
        //Remover Post
        $Comentario=Commentario::find($id);
        $Comentario->delete();
    }
}

