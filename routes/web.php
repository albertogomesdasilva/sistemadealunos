<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\TurmasController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\TestandoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrganizationsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth

Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login')
    ->middleware('guest');

Route::post('login', [AuthenticatedSessionController::class, 'store'])
    ->name('login.store')
    ->middleware('guest');

Route::delete('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

// Dashboard

Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

// Users

Route::get('users', [UsersController::class, 'index'])
    ->name('users')
    ->middleware('auth');

Route::get('users/create', [UsersController::class, 'create'])
    ->name('users.create')
    ->middleware('auth');

Route::post('users', [UsersController::class, 'store'])
    ->name('users.store')
    ->middleware('auth');

Route::get('users/{user}/edit', [UsersController::class, 'edit'])
    ->name('users.edit')
    ->middleware('auth');

Route::put('users/{user}', [UsersController::class, 'update'])
    ->name('users.update')
    ->middleware('auth');

Route::delete('users/{user}', [UsersController::class, 'destroy'])
    ->name('users.destroy')
    ->middleware('auth');

Route::put('users/{user}/restore', [UsersController::class, 'restore'])
    ->name('users.restore')
    ->middleware('auth');

// Organizations

Route::get('organizations', [OrganizationsController::class, 'index'])
    ->name('organizations')
    ->middleware('auth');

Route::get('organizations/create', [OrganizationsController::class, 'create'])
    ->name('organizations.create')
    ->middleware('auth');

Route::post('organizations', [OrganizationsController::class, 'store'])
    ->name('organizations.store')
    ->middleware('auth');

Route::get('organizations/{organization}/edit', [OrganizationsController::class, 'edit'])
    ->name('organizations.edit')
    ->middleware('auth');

Route::put('organizations/{organization}', [OrganizationsController::class, 'update'])
    ->name('organizations.update')
    ->middleware('auth');

Route::delete('organizations/{organization}', [OrganizationsController::class, 'destroy'])
    ->name('organizations.destroy')
    ->middleware('auth');

Route::put('organizations/{organization}/restore', [OrganizationsController::class, 'restore'])
    ->name('organizations.restore')
    ->middleware('auth');

// Contacts

Route::get('contacts', [ContactsController::class, 'index'])
    ->name('contacts')
    ->middleware('auth');

Route::get('contacts/create', [ContactsController::class, 'create'])
    ->name('contacts.create')
    ->middleware('auth');

Route::post('contacts', [ContactsController::class, 'store'])
    ->name('contacts.store')
    ->middleware('auth');

Route::get('contacts/{contact}/edit', [ContactsController::class, 'edit'])
    ->name('contacts.edit')
    ->middleware('auth');

Route::put('contacts/{contact}', [ContactsController::class, 'update'])
    ->name('contacts.update')
    ->middleware('auth');

Route::delete('contacts/{contact}', [ContactsController::class, 'destroy'])
    ->name('contacts.destroy')
    ->middleware('auth');

Route::put('contacts/{contact}/restore', [ContactsController::class, 'restore'])
    ->name('contacts.restore')
    ->middleware('auth');

// Reports

Route::get('reports', [ReportsController::class, 'index'])
    ->name('reports')
    ->middleware('auth');

// Images

Route::get('/img/{path}', [ImagesController::class, 'show'])
    ->where('path', '.*')
    ->name('image');

Route::get('/teste', function() {
    return 'Estou na Rota Teste';
});

Route::get('/testando', [TestandoController::class, 'index'])
    ->middleware('auth');
    
//****************************************************************** */
// TURMAS
Route::get('turmas', [TurmasController::class, 'index'])->middleware('auth')->name('turmas');

Route::get('turmas/cadastrar-nova', [TurmasController::class, 'create'])->middleware('auth');

Route::post('turmas', [TurmasController::class, 'store'])->middleware('auth');

Route::get('turmas/{turma}/editar', [TurmasController::class, 'edit'])->middleware('auth');

Route::put('turmas/{turma}/editar', [TurmasController::class, 'update'])->middleware('auth');

Route::delete('turmas/{turma}', [TurmasController::class, 'destroy'])->middleware('auth');

//****************************************************************** */
// ALUNOS

Route::get('alunos', [AlunosController::class, 'index'])->middleware('auth')->name('alunos');

Route::get('alunos/cadastrar-novo', [AlunosController::class, 'create'])->middleware('auth');

Route::post('alunos', [AlunosController::class, 'store'])->middleware('auth');

Route::get('alunos/{aluno}/editar', [AlunosController::class, 'edit'])->middleware('auth');

Route::put('alunos/{aluno}/editar', [AlunosController::class, 'update'])->middleware('auth');

Route::delete('alunos/{aluno}', [AlunosController::class, 'destroy'])->middleware('auth');

//************************************************************************************************** */
// NOTAS

Route::get('notas', [NotasController::class, 'index'])->middleware('auth')->name('notas');

Route::get('notas/cadastrar-nova', [NotasController::class, 'create'])->middleware('auth');

Route::post('notas', [NotasController::class, 'store'])->middleware('auth');

Route::get('notas/{nota}/editar', [NotasController::class, 'edit'])->middleware('auth');

Route::put('notas/{nota}/editar', [NotasController::class, 'update'])->middleware('auth');

Route::delete('notas/{nota}', [NotasController::class, 'destroy'])->middleware('auth');

Route::get('teste', [TestandoController::class, 'teste'])->name('teste');