<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->string('product_name');
            $table->string('product_details');
            $table->string('price');
            $table->string('customer_name');
            $table->string('customer_mobile');
            $table->decimal('price', 8, 2);
            $table->string('customer_address');
            $table->id();
            $table->timestamps();
        });
    }

    /** product name


     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
