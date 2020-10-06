
@extends('layout.site')

@section('title','adicionarcontrato')
    


@section('conteudo')
    
    <div class="container"> 
        <h3>Adicionar Contrato</h3>

    <form action="{{route('admin.contrato.salvar') }}" method="post" enctype="multipart/form-data">        
        @csrf 
        @include('contrato.form')
      
             <button type="submit" class="btn btn-success">Salvar Contrato </button>

         </form>

        </div>


    </div>


@endsection

