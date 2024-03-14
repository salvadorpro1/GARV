<?php

namespace App\Http\Controllers;

use App\Models\Visitante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class registerSending extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cedula' => 'required|digits:8',
            'name' => 'required|alpha',
            'lastname' => 'required|alpha',
            'reason' => 'required',
            'subsidiary' => 'required',
            'management' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Eliminar el campo _token del array $request->all()
        $data = $request->except('_token');

        // Crear un nuevo registro de visitante con los datos filtrados
        Visitante::create($data);

        session()->flash('success', 'Usuario registrado correctamente.');

        return redirect()->back();
    }
}
