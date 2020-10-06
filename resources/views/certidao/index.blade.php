@extends('layout.site')


@section('titulo','Tabeliao')
    

@section('conteudo')
    
<div class="container">
<br>
    <div class="row">
        <div class="col-3">
            <h4> Lista de Certidao </h4>
        </div>
        <div class="col-2">
            <a class="btn btn-success" href="{{route('admin.certidao.adicionar')}}">Adicionar  </a>
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
                    <th scope="col">tipoCertidao </th>
                    <th scope="col">envolvido1 </th>
                    <th scope="col">envolvido2 </th>
                    <th scope="col">dataCertidao </th>
                    <th scope="col">Tabeliao </th>
                </tr>
            </thead>

            <tbody>

                @foreach ($certidoes as $certidao)

                    <tr>
                    <td> {{$certidao->id}}</td>
                        <td> {{$certidao->tipoCertidao}}</td>
                        <td> {{$certidao->envolvido1}}</td>
                        <td> {{$certidao->envolvido2}}</td>
                        <td> {{$certidao->dataCertidao}}</td>
                        <td> {{$certidao->nome_tabeliao}}</td>
                       
                        <td>
                        <a class="btn btn-primary" href="{{route('admin.certidao.editar',$certidao->id)}}">Editar</a>
                            
                        <form method="post" action="{{route('admin.certidao.deletar',$certidao->id)}}">
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























