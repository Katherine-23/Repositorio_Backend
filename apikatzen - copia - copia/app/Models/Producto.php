<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('idprod');
            $table->string('codpro', 14)->unique();
            $table->string('nomprd');
            $table->string('desprd');
            $table->string('foto', 255);
            $table->string('precio', 10, 2);
            $table->string('stock', 3);
            $table->string('idmar');
            $table->string('idcate');
            $table->string('state', 1);
            $table->string();
            $table->foreign('idmar')->references('idmar')->on('marcas');
            $table->foreign('idcate')->references('idcate')->on('categorias');
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
?>