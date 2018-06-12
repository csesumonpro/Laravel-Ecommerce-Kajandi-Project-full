<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cus_id')->nullable();
            $table->string('ship_address_1',255)->nullable();
            $table->string('ship_address_2',255)->nullable();
            $table->string('ship_city',60)->nullable();
            $table->string('ship_country',60)->nullable();
            $table->string('ship_email',60)->nullable();
            $table->string('ship_first_name',60)->nullable();
            $table->string('ship_last_name',60)->nullable();
            $table->string('ship_phone',20)->nullable();
            $table->string('ship_state',50)->nullable();
            $table->string('ship_zip',5)->nullable();
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
        Schema::dropIfExists('shippings');
    }
}
