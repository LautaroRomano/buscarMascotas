<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\key;

class KeysController extends Controller
{
    public function getKey($key)
    {

        $existe = key::where('estado', '=', 1)
            ->where('key', '=', $key)
            ->whereNull('User_id')
            ->get();

        return view('mascotas.create', compact('existe'))->with('key', $key);
    }

    public function generarKey()
    {

        for ($i = 0; $i <= 10; $i++) {
            $key = new key();

            $key->key = 9999+$i;
            $key->estado = 1;

            $key->save();
        }
    }
}
