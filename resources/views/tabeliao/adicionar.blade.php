
@extends('layout.site')

@section('title','adicionartabeliao')
    


@section('conteudo')
    
    <div class="container"> 
        <h3>Adicionar Tabeliao</h3>

    <form action="{{route('admin.tabeliao.salvar') }}" method="post" enctype="multipart/form-data">        
        @csrf 
        @include('tabeliao.form')

             <button type="submit" class="btn btn-success">Salvar Tabeliao </button>

         </form>

        </div>


    </div>


@endsection

