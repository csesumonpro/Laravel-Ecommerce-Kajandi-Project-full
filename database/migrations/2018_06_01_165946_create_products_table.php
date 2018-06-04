<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->integer('manufacturer_id')->nullable();
            $table->integer('model_id')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('partnumber')->nullable();
            $table->integer('qty')->nullable();
            $table->string('availability')->nullable();
            $table->float('price',8,2)->nullable();
            $table->string('unit')->nullable();
            $table->string('weight')->nullable();
            $table->string('length')->nullable();
            $table->boolean('slider')->nullable()->comment('1 for set 0 unset');
            $table->float('discount_price',8,2)->nullable();
            $table->string('hot',5)->nullable();
            $table->string('stuff_pick',12)->nullable();
            $table->string('image')->nullable();
            
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
        Schema::dropIfExists('products');
    }
}
