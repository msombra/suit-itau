<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblGavFase;
use App\Models\TblGavBj;
use App\Models\TblGavAux;

class GavController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showListBj()
    {
        $bjs = TblGavBj::all();

        return view('gav.listar_gav_bj', compact('bjs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showFormBj()
    {
        $fases = TblGavFase::all();

        return view('gav.cadastrar_bj', compact('fases'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeFormBj(Request $request, TblGavBj $bj, TblGavAux $aux)
    {
        $bj_input = $request->input('numero_bj');
        $fase = $request->input('fase_processual');

        $bj->numero_bj = $bj_input;
        $bj->save();

        $aux->id_bj = $bj->id;
        $aux->id_fase = $fase;
        $aux->save();

        return redirect()->route('gav.list_bj')->with('sucesso', 'BJ incluído com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function showIdBj($id)
    {
        $fases = TblGavFase::all();
        $bj = TblGavBj::find($id);

        if(!$bj) {
            return back();
        }

        return view('gav.bj_id', compact('bj', 'fases'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
