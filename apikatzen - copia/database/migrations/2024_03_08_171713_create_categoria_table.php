<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('categoria', function (Blueprint $table) {
            $table->id('idcate');
            $table->string('nocate', 100);
            $table->char('state', 1);
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::dropIfExists('categoria');
}

};
