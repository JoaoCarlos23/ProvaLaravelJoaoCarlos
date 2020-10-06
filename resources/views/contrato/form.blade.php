<div style="width: 50%">

    <div class="form-group">
        <label for="descricao"> Tipo Contrato</label>
        <input type="text" class="form-control" id="tipoContrato" name="tipoContrato">  
        
    </div>

    <div class="form-group">
        <label for="descricao"> Envolvido 1</label>
        <input type="text" class="form-control" id="envolvido1" name="envolvido1">  
        
    </div>
    
    <div class="form-group">
        <label for="descricao"> Envolvido 2</label>
        <input type="text" class="form-control" id="envolvido2" name="envolvido2">  
        
    </div>

    <div class="form-group">
        <label for="descricao"> Data Contrato</label>
        <input type="text" class="form-control" id="dataContrato" name="dataContrato">  
        
    </div>

    <div class="form-group">
        <label for="descricao"> Valor do contrato</label>
        <input type="text" class="form-control" id="valor_total" name="valor_total">  
        
    </div>

    <div class="form-group">
        <label>Nome Tabeliao</label>
        <select class="form-control" name='nome_tabeliao'>
            <option value='NULL'>Selecionar</option>

            @foreach($tabelioes as $tabeliao)
                <option value={{$tabeliao->id}}>{{$tabeliao->nome}}</option>
            @endforeach

          </select>
    </div>


    
