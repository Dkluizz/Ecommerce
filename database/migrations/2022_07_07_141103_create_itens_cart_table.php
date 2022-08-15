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
        Schema::create('cart', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('photo', 150)->nullable();
            $table->decimal('value', 10,2)->default(0);
            $table->string('description', 200)->nullable();

            $table->unsignedInteger('product_id');
            $table->unsignedInteger('id_user');
        
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            

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
        Schema::dropIfExists('cart');
    }
};
