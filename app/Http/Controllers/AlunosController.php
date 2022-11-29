<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Aluno;
use App\Models\Turma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as RequestValidation;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       return Inertia::render('Alunos/Index', [
        'alunos' => Aluno::with('turma')->when($request->turma, function($query) use ($request) {
            return $query->where('id_turma', $request->turma);
        })->when($request->search, function($query) use ($request) {
            return $query->where('nome', 'LIKE', "%$request->search%");
        })
        ->get(),
        'turmas' => Turma::all(),
        'filters' => [
            'search' => $request->search,
            'turma' => $request->turma
        ]
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Alunos/Create', [
            'turmas' => Turma::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Aluno::create(
            $request->validate([
                'nome' => ['required', 'max:50'],
                'id_turma' => ['required']
            ])
        );
        return Redirect::route('alunos')->with('success', 'Aluno Cadastrado com Sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
        return Inertia::render('Alunos/Edit', [
            'aluno' => $aluno->load('notas'),
            'turmas' =>Turma::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Aluno $aluno)
    {
        $aluno->update(
            RequestValidation::validate([
                'nome' => ['required', 'max:50'],
                'id_turma' => ['required']
            ])
        );

        return Redirect::back()->with('success', 'Aluno atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno $aluno)
    {
        $aluno->delete();

        return Redirect::route('alunos')->with('success', 'O aluno foi deletado com Sucesso.');
    }
}
