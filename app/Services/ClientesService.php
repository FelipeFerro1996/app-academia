<?php

namespace App\Services;

use App\Models\Clientes;

class ClientesService{

    static function getAllClientes(){

        $clientes = new Clientes();

        return $clientes->paginate(10);

    }

}