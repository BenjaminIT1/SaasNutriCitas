<?php

namespace App\Http\Controllers;
use App\Models\ClienteInteresado;

use Illuminate\Http\Request;

class ClienteInteresadoController extends Controller
{
    public function store(Request $request){
        //validamos los datos
        $request->validate([
            "nombre" => ["required", "string","max:100"],
            "email" => ["required", "email", "unique:cliente_interesados,email"],
            "telefono" => ["required", "string", "max:13" ],
            "plan" =>["required", "string"],
            "nutriologo" => ["required", "in:Si,No"],
            "mensaje" => ["required", "string", "max:255"],
            "consentimiento" => ["accepted" ]
        ]);

        $clienteInteresado = new ClienteInteresado;
        $clienteInteresado->nombre=$request->input("nombre");
        $clienteInteresado->email=$request->input("email");
        $clienteInteresado->telefono=$request->input("telefono");
        $clienteInteresado->mensaje=$request->input("mensaje");

        $clienteInteresado->save();

        //Respuesta de exito
        
        return response()->json([
            "mensaje"=>"Datos Guardados Correctamente",
            "data"=>$clienteInteresado
        ], 201);
    }
}
