<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cus_id')->nullable();
            $table->string('bil_address_1')->nullable();
            $table->string('bil_address_2')->nullable();
            $table->string('bil_city')->nullable();
            $table->string('bil_country')->nullable();
            $table->string('bil_email',60)->unique();
            $table->string('bil_first_name',50)->nullable();
            $table->string('bil_last_name',60)->nullable();
            $table->string('bil_phone',20)->nullable();
            $table->string('bil_state',100)->nullable();
            $table->string('bil_zipcode',5)->nullable();
            $table->boolean('shipping_address')->nullable()->comment('0:Ship to this address;1:Ship to different address');
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
        Schema::dropIfExists('customers');
    }
}
