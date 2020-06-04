<?php

namespace App\Http\Controllers;

use App\Alunos;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Alunos::all();
        $response = [
            'success' => true,
            'message' => 'alunos listados com sucesso!',
            'alunos' => $alunos,
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alunos = new Alunos();
        $alunos->fill($request->all());
        $alunos->save();

        return response()->json($alunos, 201);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Alunos $alunos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alunos = Alunos::find($id);

        if(!$alunos) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($alunos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Alunos $alunos
     * @return \Illuminate\Http\Response
     */
    public function edit(Alunos $alunos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Alunos $alunos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aluno = Alunos::find($id);

        if(!$aluno) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $aluno->fill($request->all());
        $aluno->save();

        return response()->json($aluno);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Alunos $alunos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aluno = Alunos::find($id);

        if(!$aluno) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $aluno->delete();
    }
}
