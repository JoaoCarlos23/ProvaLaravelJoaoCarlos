<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certidao extends Model
{
    
    protected $table = 'certidao';


    //aqui é os filables que precisa pra salvar no banco, o que sera salvo!
    protected $fillable = [
       'tipoCertidao','envolvido1','envolvido2','dataCertidao','nome_tabeliao'
   ];





}
