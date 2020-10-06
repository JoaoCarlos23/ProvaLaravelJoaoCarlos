<?php

namespace App\Http\Controllers\Api;

use App\Contrato;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContratoController extends BaseCOntroller
{
    
    public function __construct()
{
    $this->classe = Contrato::class;

}



}
