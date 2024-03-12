<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaTable extends Migration
{
    public function up()
    {
        Schema::create('categoria', function (Blueprint $table) {
            $table->id('idcate');
            $table->string('nocate', 100);
            $table->string('state', 1);
            $table->string();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categoria');
    }
}
?>