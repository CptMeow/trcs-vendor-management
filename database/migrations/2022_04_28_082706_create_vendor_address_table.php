<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_address', function (Blueprint $table) {
            $table->increments('vendor_address_id');
            $table->string('sequence', 5)->nullable();
            $table->string('address_name')->nullable();
            $table->string('full_address')->nullable();
            $table->string('building')->nullable();
            $table->string('room_no')->nullable();
            $table->string('floor')->nullable();
            $table->string('village_name')->nullable();
            $table->string('address_no')->nullable();
            $table->string('moo')->nullable();
            $table->string('soi')->nullable();
            $table->string('road')->nullable();
            $table->string('tumbol')->nullable();
            $table->string('ampur')->nullable();
            $table->string('province')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendor_address');
    }
}
