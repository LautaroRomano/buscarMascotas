<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Histclinico; 

class HistclinicoController extends Controller
{ 
    public function show($id){

        $Histclinicos = Histclinico::where('Mascota_id',$id)->get();

        return view('veterinario.index', compact('Histclinicos'))->with('Mascota_id',$id);
    }

    public function create(Request $request){
        return view('veterinario.create')->with('id', $request->id); 
    }

    public function store(Request $request){
        
        $Histclinico = new Histclinico();

        $Histclinico->Mascota_id = $request->Mascota_id;
        $Histclinico->veterinario = $request->veterinario;
        $Histclinico->detalle = $request->detalle;
        $Histclinico->proxvisita = $request->proxvisita;
        
        $Histclinico->save();

        return redirect()->route('veterinario.show', ['veterinario' => $Histclinico->Mascota_id]);
    }

    public function edit($id){

        $Histclinico = Histclinico::find($id);

        return view('veterinario.edit', compact('Histclinico'));

    }

    public function update(Request $request,$id){
        $Histclinico = Histclinico::find($id);

        $Histclinico->update($request->all());

        return redirect()->route('veterinario.show', ['veterinario' => $Histclinico->Mascota_id]);

    }

    public function destroy($id){
        $Histclinico = Histclinico::find($id);

        $Histclinico->delete();

        return redirect()->route('veterinario.show', ['veterinario' => $Histclinico->Mascota_id]);
    }
}
