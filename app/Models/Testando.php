<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testando extends Model
{
    use HasFactory;

    protected $table = 'testando';

    protected $fillable = [
        'string',
        'integer',
        'decimal',
        'boolean',
        'enum'
    ];

    public function relacionamento()
    {
        return $this->hasOne(Relacionamento::class, 'id_testando');
    }
}
