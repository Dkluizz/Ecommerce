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
        Schema::create('itens_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('amount');
            $table->decimal('value', 10,2);
            $table->dateTime('dt_item');

            $table->unsignedInteger('product_id');
            $table->unsignedInteger('request_id')->nullable();
            
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('request_id')->references('id')->on('requests')->onDelete('cascade');



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
        Schema::dropIfExists('itens_requests');
    }
};
