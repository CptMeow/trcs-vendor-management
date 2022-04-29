<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procurements', function (Blueprint $table) {
            $table->integer('procurement_id', true);
            $table->string('fmis_ref_no');
            $table->string('description')->nullable();
            $table->dateTime('purchase_date');
            $table->integer('chart_of_account_id');
            $table->decimal('value', 19)->nullable();
            $table->string('fiscal_year', 10)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procurements');
    }
}
