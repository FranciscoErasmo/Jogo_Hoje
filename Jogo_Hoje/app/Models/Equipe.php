<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $table = 'equipe'; // O nome da tabela no banco de dados
    protected $fillable = ['modalidade', 'status', 'capitao', 'timea', 'timeb', 'confrat', 'local', 'data', 'horainicial', 'horafinal', 'checkbox'];
}
