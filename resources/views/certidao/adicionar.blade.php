
@extends('layout.site')

@section('title','adicionarcertidao')
    


@section('conteudo')
    
    <div class="container"> 
        <h3>Adicionar Certidao</h3>

    <form action="{{route('admin.certidao.salvar') }}" method="post" enctype="multipart/form-data">        
        @csrf 
        @include('certidao.form')

             <button type="submit" class="btn btn-success">Salvar Certidao </button>

         </form>

        </div>


    </div>


@endsection

