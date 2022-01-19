<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacuna;

class VacunasController extends Controller 
{
    public function show($id){

        $Vacunas = Vacuna::where('Mascota_id',$id)->get();

        return view('vacunas.index', compact('Vacunas'))->with('Mascota_id',$id);
    }

    public function create(Request $request){
        return view('vacunas.create')->with('id', $request->id); 
    }

    public function store(Request $request){
        
        $Vacuna = new Vacuna();

        $Vacuna->Mascota_id = $request->Mascota_id;
        $Vacuna->name = $request->name;
        $Vacuna->detalle = $request->detalle;
        $Vacuna->proxvacuna = $request->proxvacuna;
        
        $Vacuna->save();

        return redirect()->route('vacunas.show', ['vacuna' => $Vacuna->Mascota_id]);
    }

    public function edit($id){

        $Vacuna = Vacuna::find($id);

        return view('vacunas.edit', compact('Vacuna'));

    }

    public function update(Request $request,$id){
        $Vacuna = Vacuna::find($id);

        $Vacuna->update($request->all());

        return redirect()->route('vacunas.show', ['vacuna' => $Vacuna->Mascota_id]);

    }

    public function destroy($id){
        $Vacuna = Vacuna::find($id);

        $Vacuna->delete();

        return redirect()->route('vacunas.show', ['vacuna' => $Vacuna->Mascota_id]);
    }
}
