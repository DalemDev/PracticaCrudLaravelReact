<?php

namespace App\Services;

use App\Models\Cliente;

/*
    esta clase implementa la interface IFunctions por ende debemos implementar todos los metodos de esa interface
*/

class ClienteService implements IFunctions
{
    public function index()
    {
        try {
            $clientes = Cliente::all(); // obtenemos todos los clientes mediante el modelo y usando su metodo estatico all (cuando se usa :: es porque el metodo que se esta usando es estatico, es decir se puede acceder a el tan solo con el nombre del modelo)
            return response()->json($clientes, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
    public function store(array $data)
    {
        try {
            $cliente = new Cliente();
            $cliente->nombre = $data['nombre'];
            $cliente->apellido = $data['apellido'];
            $cliente->edad = $data['edad'];
            $cliente->sexo = $data['sexo'];
            $cliente->imagen = $data['imagen'];

            $cliente->save(); // guardamos el nuevo cliente

            return response()->json(['cliente guardado exitosamente' => $cliente], 201);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
    public function show($id)
    {
        try {
            $cliente = Cliente::find($id); // buscamos el cliente mediante su id

            return response()->json(['cliente encontrado' => $cliente], 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
    public function update($id, array $data)
    {
        try {
            $cliente = Cliente::findOrFail($id); // buscamos el cliente mediante su id, si no existe lanzara un error
            $cliente->nombre = $data['nombre'];
            $cliente->apellido = $data['apellido'];
            $cliente->edad = $data['edad'];
            $cliente->sexo = $data['sexo'];
            $cliente->imagen = $data['imagen'];

            $cliente->save(); // guardamos los nuevos datos del cliente que encontramos

            return response()->json(['cliente actualizado exitosamente' => $cliente], 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
    public function destroy($id)
    {
        try {
            $cliente = Cliente::findOrFail($id); //buscamos el cliente mediante su id, si no existe lanzara un error
            $cliente->delete(); // lo eliminamos de la bd
            return response()->json(['cliente eliminado' => $cliente], 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
