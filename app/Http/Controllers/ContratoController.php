<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contrato;
use App\Tabeliao;

class ContratoController extends Controller
{
    

    public function index(Request $req)
    {

        $contratos = Contrato::all(); 
      
        $mensagem = $req->session()->get('mensagem'); 
      
        return view('contrato.index', compact('contratos','mensagem')); 

    }



    public function create() //adicionar
    {
        //caminho a partir do view(pasta padrao)

        $tabelioes = Tabeliao::all();
        return view('contrato.adicionar',compact('tabelioes'));


    }


    public function store(Request $req)  //salvar
    {

        $contrato = $req->all();

        Contrato::create($contrato); 
        $req->session()->flash('mensagem','Contrato  adicionado com sucesso!');

        //vai redirecionar pra essa pagina, depois que salvar no banco
        return redirect()->route('admin.contrato'); //apelido da rota

    }


    public function edit($id) //editar
    {

        $tabelioes = Tabeliao::all();
        $contrato = Contrato::find($id);

        return view('contrato.editar',compact('contrato','tabelioes'));
        
    }


    public function update(Request $req, $id) //atualizar
    {
         $contrato = $req->all();

        $contratoSelecionado = Contrato::find($id); 
        $contratoSelecionado->update($contrato); 

        $req->session()->flash('mensagem','Contrato atualizado com sucesso!'); 

        return redirect()->route('admin.contrato'); //apelido da rota
      
    }


    public function destroy(Request $req ,$id) //deletar
    {
        Contrato::find($id)->delete(); //busca o id correspondente e deleta do banco
        $req->session()->flash('mensagem','Contrato removido com sucesso!'); 
        return redirect()->route('admin.contrato'); //deletar e atualizar a pagina 
    }




}
