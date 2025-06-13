<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClienteInteresado extends Model
{
    //
    //$fillable es una propiedad de Eloquent que permite especificar los campos que se pueden asignar masivamente.
    // los campos que se pueden asignar masivamente son los campos que se encuentran en el array $fillable.
    protected $fillable = [
        "nombre",
        "email",
        "telefono",
        "plan",
        "nutriologo",
        "mensaje",
        "consentimiento"
        
    ];
}
