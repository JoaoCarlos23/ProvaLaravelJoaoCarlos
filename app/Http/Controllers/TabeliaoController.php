<?php

namespace App\Http\Controllers;

use App\Tabeliao;
use Illuminate\Http\Request;

class TabeliaoController extends Controller
{
    


    public function index(Request $req)
    {

        $tabelioes = Tabeliao::all(); 
      
        $mensagem = $req->session()->get('mensagem'); 
      
        return view('tabeliao.index', compact('tabelioes','mensagem')); 

    }



    public function create() //adicionar
    {
        //caminho a partir do view(pasta padrao)
        return view('tabeliao.adicionar');

    }


    public function store(Request $req)  //salvar
    {

        $tabeliao = $req->all();

        Tabeliao::create($tabeliao); 
        $req->session()->flash('mensagem','Tabeliao  adicionado com sucesso!');

        //vai redirecionar pra essa pagina, depois que salvar no banco
        return redirect()->route('admin.tabeliao'); //apelido da rota

    }


    public function edit($id) //editar
    {

        $tabeliao = Tabeliao::find($id);

        return view('tabeliao.editar',compact('tabeliao'));
        
    }

    public function update(Request $req, $id) //atualizar
    {
         $tabeliao = $req->all();


        $tabeliaoSelecionado = Tabeliao::find($id); 
        $tabeliaoSelecionado->update($tabeliao); 

        $req->session()->flash('mensagem','Tabeliao ' .$req->nome .' atualizado com sucesso!'); 

        return redirect()->route('admin.tabeliao'); //apelido da rota
      
    }


    public function destroy(Request $req ,$id) //deletar
    {
        Tabeliao::find($id)->delete(); //busca o id correspondente e deleta do banco
        $req->session()->flash('mensagem','Tabeliao '.$req->nome.'removido com sucesso!'); 
        return redirect()->route('admin.tabeliao'); //deletar e atualizar a pagina 
    }








}
