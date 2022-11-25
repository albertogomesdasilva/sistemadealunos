<?php

namespace App\Models;

use App\Models\Aluno;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nota extends Model
{
    use HasFactory;

    protected $fillable = ['nota', 'id_aluno'];

    public function aluno() {
        return $this->belongsTo(Aluno::class, 'id_aluno');
    }

   
}
