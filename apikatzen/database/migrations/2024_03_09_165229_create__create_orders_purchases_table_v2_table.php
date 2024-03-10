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
        Schema::create('orders_purchase_v2', function (Blueprint $table) {
            $table->id('idordpur');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('idprov');
            $table->string('method', 50);
            $table->text('total_products');
            $table->decimal('total_price', 10, 2);
            $table->string('placed_on', 15);
            $table->string('payment_status', 20);
            $table->string('tipc', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_purchase_v2');
    }
};

