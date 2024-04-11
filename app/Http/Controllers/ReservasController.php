<?php

namespace App\Http\Controllers;

use App\Models\reservas;
use Illuminate\Http\Request;
use App\Models\CodigosRespuesta;
use App\Models\Response;

class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAll(){
        $reservas = reservas::all();
        if (!empty($reservas)){
            header(CodigosRespuesta::httpHeaderFor(CodigosRespuesta::HTTP_OK));
            $response = new Response(CodigosRespuesta::HTTP_OK, $reservas );
            echo json_encode ($response);
        }else{
            header(CodigosRespuesta::httpHeaderFor(CodigosRespuesta::HTTP_NO_CONTENT));
            $response = new Response(CodigosRespuesta::HTTP_NO_CONTENT, "No se han encontrado reservas");
            echo json_encode ($response);
        }        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(reservas $reservas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reservas $reservas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reservas $reservas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reservas $reservas)
    {
        //
    }
}
