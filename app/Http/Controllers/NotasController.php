<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Inertia\Inertia;
use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as RequestValidation;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Inertia::render('Notas/Index', [
            'notas' => Nota::when($request->aluno, function($query) use($request) {
                return $query->where('id_aluno', $request->aluno);
            })
            ->when($request->search, function ($query) use($request) {
                return $query->where('nota', 'like', "%$request->search%");
            })
                    ->with('aluno')
                    ->get(),
            'filters' => [
                'search' => '',
                'aluno' => ''
            ],
            'alunos' => Aluno::all()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Notas/Create', [
            'alunos'=> Aluno::all()
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
       Nota::create(
        $request->validate([
            'nota'=> ['required'],
            'id_aluno' => ['required']
        ])
        );
            return Redirect::route('notas')->with('success', 'Nota Cadastrada.');
            
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
    public function edit(Nota $nota)
    {
        return Inertia::render('Notas/Edit', [
            'alunos' => Aluno::all(),
            'nota' => $nota

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Nota $nota)
    {
        $nota->update(
            RequestValidation::validate([
                'nota' => ['required'],
                'id_aluno' => ['required']
            ])
        );

        return Redirect::back()->with('success', 'Nota atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nota $nota)
    {
        $nota->delete();

        return Redirect::route('notas')->with('success', 'A Nota foi excluída com sucesso.');
    }
}
