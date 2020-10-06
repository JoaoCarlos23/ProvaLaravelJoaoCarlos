

@extends('layout.site')

@section('title','Editar contrato')
    


@section('conteudo')
    
    <div class="container"> 
        <h3>Editar Contrato</h3>

    <form enctype="multipart/form-data" action="{{route('admin.contrato.atualizar',$contrato->id) }}" method="post" enctype="multipart/form-data">
            @csrf 
          
            <input type="hidden" name="_method" value="put"> 
            @include('contrato.form')

             <button type="submit" class="btn btn-success">Salvar Modificações </button>


         </form>

        </div>


    </div>


@endsection
