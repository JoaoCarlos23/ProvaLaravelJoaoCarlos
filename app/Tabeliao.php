<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabeliao extends Model
{
    
    protected $table = 'tabeliao';


    //  aqui é os filables que precisa pra salvar no banco, o que sera salvo!
     protected $fillable = [
        'nome'
    ];







}
