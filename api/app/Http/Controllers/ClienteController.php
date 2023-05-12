<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\ClienteService;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    private $servicio; // defino una variable privada

    public function __construct()
    {
        $this->servicio = new ClienteService(); // creo una instancia del ClienteService para poder usar sus metodos
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $response = $this->servicio->index(); // ejecuto el metodo index del servicio

            return $response;
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'nombre' => 'required|string',
                'apellido' => 'required|string',
                'edad' => 'required|integer',
                'sexo' => 'required|string',
                'imagen' => 'required|string',
            ]);

            $response = $this->servicio->store($request->all()); // ejecuto el metodo store del servicio

            return $response;
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $response = $this->servicio->show($id); // ejecuto el metodo show del servicio

            return $response;
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $response = $this->servicio->update($id, $request->all()); // ejecuto el metodo update del servicio

            return $response;
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $response = $this->servicio->destroy($id); // ejecuto el metodo destroy del servicio

            return $response;
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }
}
