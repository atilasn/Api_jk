<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $fillable = ['NumMatr','CPF','CodCur','Nome', 'Nascimento'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'alunos';
}
