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
        Schema::create('order_transactions', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignId('customer_id');
            $table->string('phone');
            $table->string('address');
            $table->foreignId('perfume_id');
            $table->foreignId('laundry_type_id')->nullable();
            $table->foreignId('laundry_package_id')->nullable();
            $table->foreignId('courier_id')->nullable();
            $table->foreignId('weight')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_transactions');
    }
};
