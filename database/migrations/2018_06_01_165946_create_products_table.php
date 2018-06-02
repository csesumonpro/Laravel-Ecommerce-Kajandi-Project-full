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
            $table->integer('pro_cat_id')->nullable();
            $table->integer('pro_sub_cat_id')->nullable();
            $table->string('pro_name')->nullable();
            $table->text('pro_desc')->nullable();
            $table->float('pro_price',8,2)->nullable();
            $table->tinyInteger('pro_qty')->nullable();
            $table->string('pro_condition')->nullable();
            $table->string('pro_availability')->nullable();
            $table->text('pro_image')->nullable();
            $table->boolean('pro_slider')->nullable()->comment('1 for set home page slider 0 for no');
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
