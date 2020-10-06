<?php

namespace App\Http\Controllers;

use App\Certidao;
use App\Tabeliao;
use Illuminate\Http\Request;

class CertidaoController extends Controller
{
    
    public function index(Request $req)
    {

        $certidoes = Certidao::all(); 
      
        $mensagem = $req->session()->get('mensagem'); 
      
        return view('certidao.index', compact('certidoes','mensagem')); 

    }



    public function create() //adicionar
    {
        //caminho a partir do view(pasta padrao)

        $tabelioes = Tabeliao::all();
        return view('certidao.adicionar',compact('tabelioes'));


    }


    public function store(Request $req)  //salvar
    {

        $certidao = $req->all();

        Certidao::create($certidao); 
        $req->session()->flash('mensagem','Certidao  adicionado com sucesso!');

        //vai redirecionar pra essa pagina, depois que salvar no banco
        return redirect()->route('admin.certidao'); //apelido da rota

    }


    public function edit($id) //editar
    {

        $tabelioes = Tabeliao::all();
        $certidao = Certidao::find($id);

        return view('certidao.editar',compact('certidao','tabelioes'));
        
    }

    public function update(Request $req, $id) //atualizar
    {
         $certidao = $req->all();


        $certidaoSelecionado = Certidao::find($id); 
        $certidaoSelecionado->update($certidao); 

        $req->session()->flash('mensagem','Certidao atualizado com sucesso!'); 

        return redirect()->route('admin.certidao'); //apelido da rota
      
    }


    public function destroy(Request $req ,$id) //deletar
    {
        Certidao::find($id)->delete(); //busca o id correspondente e deleta do banco
        $req->session()->flash('mensagem','Certidao removido com sucesso!'); 
        return redirect()->route('admin.certidao'); //deletar e atualizar a pagina 
    }




}
