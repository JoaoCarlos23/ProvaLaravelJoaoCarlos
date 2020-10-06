<?php

namespace App\Http\Controllers\Api;

use App\Tabeliao;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TabeliaoController extends BaseCOntroller
{
    

    public function __construct()
    {
        $this->classe = Tabeliao::class;
    
    }



}
