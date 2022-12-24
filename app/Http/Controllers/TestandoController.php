<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TestandoController extends Controller
{
    public function index(){
        return 'Estou na Rota Testando do Controller';
    }

    public function teste(){
        return Inertia::render('Teste/Index');
    }
}
