<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id('idprov');
            $table->unsignedBigInteger('idusu');
            $table->string('rucprv', 11)->unique();
            $table->text('nomprv');
            $table->string('corrprv', 35);
            $table->string('state', 1);
            $table->timestamps();
            $table->foreign('idusu')->references('idusu')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}

