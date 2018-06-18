<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_adverts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ads_section');
            $table->integer('seller_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->string('ads_title')->nullable();
            $table->string('ads_description')->nullable();
            $table->string('shop_now_link')->nullable();
            $table->string('banner_color')->nullable();
            $table->string('price')->nullable();
            $table->string('ads_image')->nullable();
            $table->integer('admin_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('seller_id')->references('id')->on('sellers');
            $table->foreign('product_id')->references('id')->on('seller_products');
            $table->foreign('admin_id')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_adverts');
    }
}
