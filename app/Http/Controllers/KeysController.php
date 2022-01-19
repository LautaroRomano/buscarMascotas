<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\key;
use Illuminate\Support\Facades\DB;

class KeysController extends Controller
{
    public function getKey($key)
    {

        if (key::where('estado', '=', 1)->where('key', '=', $key)->whereNull('User_id')->exists()) {
            return view('mascotas.create')->with('key', $key);
        }

        if (DB::table('mascotas')->where('key', $key)->exists()) {
            $mascotas = DB::table('mascotas')->where('key', $key)->first();
            $dueño = DB::table('users')->where('id', $mascotas->User_id)->first();
            return view('mascotas.viewDatos')->with('mascota', $mascotas)->with('dueño', $dueño);
        }
        echo "Este collar no se encuentra habilitado";
    }

    public function generarKey()
    {
        echo "entro a la funcion";

        $possible = "0123456789abcdefghijklmnopqrstvwxyz";
        $string = "";
    
        for ($i = 0; $i <= 10; $i++) {
            
            
            for ($j = 0; $j < 8; $j++) {        
                $char = substr($possible, mt_rand(0, strlen($possible) - 1), 1);
                $string .= $char;
            }
            
            $key = new key();
            $key->key = $string;
            $key->estado = 1;
            $key->save();
            
            echo "creo $i  con $string";
            $string = "";
        }
    }

}
