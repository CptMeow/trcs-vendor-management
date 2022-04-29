<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->integer('vendor_id', true);
            $table->string('juristic_type');
            $table->string('juristic_id', 13);
            $table->date('register_date');
            $table->string('juristic_name_th');
            $table->string('juristic_name_en')->nullable();
            $table->bigInteger('register_capital')->nullable();
            $table->bigInteger('paid_register_capital')->nullable();
            $table->string('juristic_status')->nullable();
            $table->string('standard_id', 10);
            $table->char('blacklist_flag', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
