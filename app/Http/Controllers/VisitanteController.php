<?php

namespace App\Http\Controllers;

use App\Models\Visitante;
use Illuminate\Http\Request;

class VisitanteController extends Controller
{
    public function index()
    {
        $visitantes = Visitante::paginate(2); // Paginar con 10 elementos por página
        $visitantes->withQueryString()->onEachSide(1); // Personalizar la paginación

        // Eliminar la información de cantidad de resultados de la paginación
        $visitantes->getCollection()->transform(function ($item) {
            return $item;
        });

        return view('lista', compact('visitantes'));
    }
}
