@extends('layout.site')


@section('titulo','Tabeliao')
    

@section('conteudo')
    
<div class="container">
<br>
    <div class="row">
        <div class="col-3">
            <h4> Lista de Contratos </h4>
        </div>
        <div class="col-2">
            <a class="btn btn-success" href="{{route('admin.contrato.adicionar')}}">Adicionar  </a>
        </div>
    </div>

<br>



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
                    <th scope="col">tipoContrato </th>
                    <th scope="col">envolvido1 </th>
                    <th scope="col">envolvido2 </th>
                    <th scope="col">dataContrato</th>
                    <th scope="col">Valor </th>
                    <th scope="col">Tabeliao </th>
                </tr>
            </thead>

            <tbody>

                @foreach ($contratos as $contrato)

                    <tr>
                        <td> {{$contrato->id}}</td>
                        <td> {{$contrato->tipoContrato}}</td>
                        <td> {{$contrato->envolvido1}}</td>
                        <td> {{$contrato->envolvido2}}</td>
                        <td> {{$contrato->dataContrato}}</td>
                        <td> {{$contrato->valor_total}}</td>
                        <td> {{$contrato->nome_tabeliao}}</td>
                       
                        <td>
                        <a class="btn btn-primary" href="{{route('admin.contrato.editar',$contrato->id)}}">Editar</a>
                            
                        <form method="post" action="{{route('admin.contrato.deletar',$contrato->id)}}">
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























