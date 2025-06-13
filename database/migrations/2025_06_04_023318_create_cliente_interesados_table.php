<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cliente_interesados', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            //unique() es una restricción de índice único que se agrega a la columna email. Esto significa que no se pueden repetir valores en la columna email en la tabla cliente_interesados.;
            $table->string("email")->unique(); 

            $table->string("telefono"); 
            //nullable() es una restricción que se agrega a la columna mensaje. Esto significa que la columna mensaje puede contener valores nulos en la tabla cliente_interesados.;
            $table->text("mensaje")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente_interesados');
    }
};
