<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sellers', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('admin_id')->nullable();
          $table->string('email')->unique();
          $table->string('vendorname');
          $table->text('address');
          $table->string('country');
          $table->string('url')->nullable();
          $table->string('cac')->nullable();
          $table->string('workforce')->nullable();
          $table->string('yearsofexp')->nullable();
          $table->string('ratings')->nullable();
          $table->string('contactname');
          $table->string('contactphone')->nullable();
          $table->string('contactemail')->nullable();
          $table->string('chairmanname')->nullable();
          $table->string('chairmanphone')->nullable();
          $table->string('chairmanemail')->nullable();
          $table->string('producttype')->nullable();
          $table->string('location')->nullable();
          $table->string('vendor_type')->nullable();
          $table->string('password');
          $table->boolean('acStatus')->nullable();
          $table->rememberToken();
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
        Schema::dropIfExists('sellers');
    }
}
