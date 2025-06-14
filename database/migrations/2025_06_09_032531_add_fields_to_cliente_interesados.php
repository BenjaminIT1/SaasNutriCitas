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
        Schema::table('cliente_interesados', function (Blueprint $table) {
            $table->string("plan")->after("mensaje");
            $table->enum("nutriologo", ['si', 'no'])->after("plan");

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cliente_interesados', function (Blueprint $table) {
            //
        });
    }
};
