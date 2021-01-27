<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use App\Models\Contratos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clientes = Clientes::all();
        $contratos = Contratos::all();

        $filtro1 = $request->get('tipo'); 
        $filtro2 = $request->get('tipo2');

        $queryContratos = DB::table('contratos')->whereBetween('fecha', [$filtro1, $filtro2])->orderBy('fecha')->get();

        return view('clientes.index')->with('clientes', $clientes)->with('contratos', $contratos)->with('queryContratos', $queryContratos);
    }

}