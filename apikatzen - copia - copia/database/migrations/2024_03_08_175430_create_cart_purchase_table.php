<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartPurchaseTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cart_purchase', function (Blueprint $table) {
            $table->id('idcpr');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('idprod');
            $table->text('name');
            $table->decimal('price', 10, 2);
            $table->integer('quantity');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('idprod')->references('idprod')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_purchase');
    }
}
