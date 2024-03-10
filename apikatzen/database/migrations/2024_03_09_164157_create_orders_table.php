<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('idord')->autoIncrement();
            $table->char('clien_numdoc', 8);
            $table->text('nomcl');
            $table->string('method', 50);
            $table->text('total_products');
            $table->decimal('total_price', 10, 2);
            $table->string('placed_on', 15);
            $table->string('payment_status', 20);
            $table->string('tipc', 15);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
}
