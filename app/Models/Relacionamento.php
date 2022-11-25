<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relacionamento extends Model
{
    use HasFactory;

    protected $table = 'relacionamento';

    protected $fillable = [
        'nome',
        'id_testando'
    ];

    public function testando()
    {
        return $this->belongsTo(Testando::class, 'id_testando');
    }
}
