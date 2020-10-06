<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

abstract class BaseCOntroller extends Controller
{
    
    protected $classe;


    public function listar(Request $req)
    {
    
        $dados = $this->classe::all();
    

        return response()->json($dados, 200); 
    
    }
    

    public function salvar(Resquest $req)
    {
    
        $dados = $req->all();
    
        return response()->json($this->classe::create($dados), 201);
    
    }
    
    
    
    public function buscar($id)
    {

            $dados = $this->classe::find($id); 
            if (is_null($dados)) {
                return response()->json('Item não encontrado', 404); //se retornar vazio, retorna um 204 mas nao tem nada retornado
        }
    
         return response()->json($dados, 200);
    
    }
    
    
    
    public function atualizar(Request $req, $id)
    {
    
        $dados = $req->all();
    
        $item = $this->classe::find($id); //achar o que vc quer atuzalizar pelo id
    
        if(is_null($item))
        {
            return response()->json(['erro' => 'Recurso não encontrado'],404);
            //se nao existir, retorna esse erro 
        }
        else
        {
    
            return response()->json($item->update($dados),200);
    
        }
    
    
    }
    
    
    public function deletar($id)
    {
    
         $item = $this->classe::find($id);
    
        if(is_null($item)){
    
            return response()->json(['erro' => 'recurso nao encontrado'],404);
        }
    
        $item->delete();
    
        return response()->json('Item removido', 200);
    
    }
    





}
