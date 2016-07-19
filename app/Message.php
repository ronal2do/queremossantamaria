<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'nome', 
        'email', 
        'endereco', 
        'telefone',
        'celular',
        'whatsapp',
        'sugestao'
    ];
}
