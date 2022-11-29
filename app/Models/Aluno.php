<?php

namespace App\Models;

use App\Models\Nota;
use App\Models\Turma;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'id_turma'
    ];

    public function turma()
    {
        return $this->belongsTo(Turma::class, 'id_turma');
    }

    public function notas()
    {
        return $this->hasMany(Nota::class, 'id_aluno');
    }
}
