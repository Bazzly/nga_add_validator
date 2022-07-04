<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('image');
            $table->string('house_number');
            $table->string('street_name');
            $table->string('community_name');
            $table->string('landmark');
            $table->string('nearest_bus_stop');
            $table->foreignId('postcode_id')->constrained();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->boolean('is_verified')->default(0);
            $table->foreignId('user_id')->constrained();
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
