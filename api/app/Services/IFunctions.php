<?php

namespace App\Services;

/*
    esto es una interface, lo que hace es que cualquier clase que implemente esta interfaz debe estrictamente implementar todos los metodos que se encuentran aqui
*/

interface IFunctions
{
    public function index();
    public function store(array $data);
    public function show($id);
    public function update($id, array $data);
    public function destroy($id);
}
