<div style="width: 50%">
    <div class="form-group">
        <label for="descricao"> Tipo Certidao</label>
        <input type="text" class="form-control" id="tipoCertidao" name="tipoCertidao">  
        
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
        <label for="descricao"> Data Certidao</label>
        <input type="text" class="form-control" id="dataCertidao" name="dataCertidao">  
        
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



