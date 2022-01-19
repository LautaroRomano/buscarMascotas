<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;
use App\models\User;
use Illuminate\Support\Facades\DB;

class MascotasController extends Controller
{
    
    public function index(){

        $user = auth()->user()->name;

        $mascotas = Mascota::where('User_id',auth()->user()->id)->get();

        return view('mascotas.index', compact('mascotas'))->with('username',$user);
    }

    public function create($key){
        return view('mascotas.create')->with('key', $key);  
    }

    public function store(Request $request){
        
        DB::table('keys')
            ->where('key', $request->key)
            ->update([
                'User_id' => auth()->user()->id,
                'estado' => 0,
            ]);
        
        $mascota = new Mascota();

        $mascota->User_id = auth()->user()->id;
        $mascota->key = $request->key;
        $mascota->name = $request->name;
        $mascota->calleynum = $request->calleynum;
        $mascota->enfermedades = $request->enfermedades;
        $mascota->medicamentos = $request->medicamentos; 
        $mascota->fec_nac = $request->fec_nac; 
        
        $mascota->save();

        return redirect()->route('mascotas.index');
    }

    public function edit($id){
        $mascota = Mascota::find($id);

        if($mascota->User_id == auth()->user()->id){
            return view('mascotas.edit', compact('mascota'));
        }

        echo "Solo puedes editar los datos de tu mascota";

    }

    public function update(Request $request,$id){
        $mascota = Mascota::find($id);

        $mascota->update($request->all());

        return redirect()->route('mascotas.index'); 

    }

    public function destroy($id){
        $mascota = Mascota::find($id);

        $mascota->delete();

        return redirect()->route('mascotas.index');
    }
}
