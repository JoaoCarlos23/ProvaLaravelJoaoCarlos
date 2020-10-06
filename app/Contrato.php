<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    
    protected $table = 'contrato';

    protected $fillable = [
        'tipoContrato','envolvido1','envolvido2','dataContrato','valor_total','nome_tabeliao'
    ];


}
