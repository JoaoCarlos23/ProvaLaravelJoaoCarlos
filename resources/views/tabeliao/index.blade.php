@extends('layout.site')


@section('titulo','Tabeliao')
    

@section('conteudo')
    
<div class="container">
<br>
    <div class="row">
        <div class="col-3">
            <h4> Lista de Tabeliao </h4>
        </div>
        <div class="col-2">
            <a class="btn btn-success" href="{{route('admin.tabeliao.adicionar')}}">Adicionar  </a>
        </div>
    </div>

<br>



    {{-- improviso de mensagem de sucesso ao salvar o curso --}}

    @if(!empty($mensagem))
    <div class="alert alert-success">
        {{ $mensagem }}
    </div>
    @endif

    <div class="row">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID </th>
                    <th scope="col">Nome </th>
                </tr>
            </thead>

            <tbody>

                @foreach ($tabelioes as $tabeliao)

                    <tr>
                    <td> {{$tabeliao->id}}</td>
                        <td> {{$tabeliao->nome}}</td>
                       
                        <td>
                        <a class="btn btn-primary" href="{{route('admin.tabeliao.editar',$tabeliao->id)}}">Editar</a>
                            
                        <form method="post" action="{{route('admin.tabeliao.deletar',$tabeliao->id)}}">
                           @csrf
                           @method('DELETE')
                            <button class="btn btn-danger">Deletar</button>
                        </form>
                      

                        </td>
                    </tr>


                @endforeach



               
            </tbody>


        </table>

    </div>

    


</div>

@endsection























