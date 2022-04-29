<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorFinancialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_financials', function (Blueprint $table) {
            $table->increments('vendor_financial_id');
            $table->string('juristic_id', 13);
            $table->bigInteger('register_capital')->nullable();
            $table->decimal('account_receivable', 19)->nullable();
            $table->decimal('current_liabilities', 19)->nullable();
            $table->string('inventory')->nullable();
            $table->bigInteger('paid_up_capital')->nullable();
            $table->decimal('proper_tr_equipment', 19)->nullable();
            $table->decimal('shareholder_equity', 19)->nullable();
            $table->decimal('total_asset', 19)->nullable();
            $table->decimal('total_current_asset', 19)->nullable();
            $table->decimal('total_liabilities', 19)->nullable();
            $table->decimal('admin_expenses', 19)->nullable();
            $table->decimal('cost_of_goods_sold', 19)->nullable();
            $table->decimal('earning_per_share', 19)->nullable();
            $table->decimal('income_tax', 19)->nullable();
            $table->decimal('interest_expenses', 19)->nullable();
            $table->decimal('net_profit', 19)->nullable();
            $table->decimal('sale_revenue', 19)->nullable();
            $table->decimal('total_revenue', 19)->nullable();
            $table->string('statement_year', 4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendor_financials');
    }
}
