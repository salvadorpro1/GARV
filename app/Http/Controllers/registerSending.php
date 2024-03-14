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
            'cedula' => 'required|digits_between:7,8',
            'name' => 'required|regex:/^[A-Za-z\s]+$/u',
            'lastname' => 'required|regex:/^[A-Za-z\s]+$/u',
            'reason' => 'required',
            'subsidiary' => 'required',
            'management' => 'required',
        ], [
            'cedula.required' => 'El campo cédula es obligatorio.',
            'cedula.digits_between' => 'El campo cédula debe tener entre :min y :max dígitos.',
            'name.required' => 'El campo nombre es obligatorio.',
            'name.regex' => 'El campo nombre solo puede contener letras y espacios.',
            'lastname.required' => 'El campo apellido es obligatorio.',
            'lastname.regex' => 'El campo apellido solo puede contener letras y espacios.',
            'reason.required' => 'El campo razón de visita es obligatorio.',
            'subsidiary.required' => 'El campo filial es obligatorio.',
            'management.required' => 'El campo gerencia es obligatorio.',
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
