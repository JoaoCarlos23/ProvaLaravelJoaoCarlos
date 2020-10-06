

@extends('layout.site')

@section('title','Editar Certidao')
    


@section('conteudo')
    
    <div class="container"> 
        <h3>Editar Certidao</h3>

    <form enctype="multipart/form-data" action="{{route('admin.certidao.atualizar',$tabeliao->id) }}" method="post" enctype="multipart/form-data">
            @csrf 
          
            <input type="hidden" name="_method" value="put"> 
            @include('certidao.form')

             <button type="submit" class="btn btn-success">Salvar Modificações </button>


         </form>

        </div>


    </div>


@endsection
