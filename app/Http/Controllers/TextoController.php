<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Texto;

class TextoController extends Controller
{
    public function update(Request $request, $clave)
    {
        $contenido = $request->input('contenido');

        // Si el contenido está vacío, no guardar ni actualizar
        if (is_null($contenido) || trim($contenido) === '') {
            return redirect()->back();
        }

        $texto = \App\Models\Texto::where('clave', $clave)->first();

        if ($texto) {
            $texto->contenido = $contenido;
            $texto->save();
        } else {
            \App\Models\Texto::create([
                'clave' => $clave,
                'contenido' => $contenido,
            ]);
        }

        return redirect()->back();
    }
}
