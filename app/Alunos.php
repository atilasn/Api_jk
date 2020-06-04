<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $fillable = ['num_matr','cpf','cod_cur','nome', 'nascimento'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'alunos';
}
