<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $fillable = ['num_mat','cpf','cod_cur','nome', 'nascimento', 'bolsa', 'email'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'alunos';
}
