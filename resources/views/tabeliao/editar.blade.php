

@extends('layout.site')

@section('title','Editar curso')
    


@section('conteudo')
    
    <div class="container"> 
        <h3>Editar Tabeliao</h3>

    <form enctype="multipart/form-data" action="{{route('admin.tabeliao.atualizar',$tabeliao->id) }}" method="post" enctype="multipart/form-data">
            @csrf 
          
            <input type="hidden" name="_method" value="put"> 
            @include('tabeliao.form')

             <button type="submit" class="btn btn-success">Salvar Modificações </button>


         </form>

        </div>


    </div>


@endsection
