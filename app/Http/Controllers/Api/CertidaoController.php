<?php

namespace App\Http\Controllers\Api;

use App\Certidao;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CertidaoController extends BaseCOntroller
{
    

    public function __construct()
{
    $this->classe = Certidao::class;

}


}
