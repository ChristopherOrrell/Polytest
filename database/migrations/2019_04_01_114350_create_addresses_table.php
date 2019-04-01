<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('addresses', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('addressable_id');
                $table->string('addressable_type');
                $table->string('firstname', 50);
                $table->string('lastname', 50);
                $table->string('address', 50);
                $table->string('address2', 50);
                $table->string('city', 50);
                $table->string('state', 50);
                $table->string('postcode', 50);
                $table->string('country', 50);
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
        Schema::dropIfExists('addresses');
    }
}
