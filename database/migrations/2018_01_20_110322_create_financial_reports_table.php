<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancialReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('custom_fees');
            $table->integer('supervisoryAuthority_Fees');
            $table->integer('imports_exports_fees');
            $table->integer('noloon_fees')->nullable();
            $table->integer('dumpsReturn_fees');
            $table->integer('navigational_fees');
            $table->integer('form_fees');
            $table->integer('bank_communion_fees');
            $table->integer('eServices_fees');
            $table->integer('navigational_fine_fees');
            $table->integer('storage_fees');
            $table->integer('insurance_fee')->nullable();
            $table->integer('tax_report_fees');
            $table->integer('transportation_fees');
            $table->integer('procedures_fees')->nullable();
            $table->integer('summary_fees');
            $table->integer('container_transportation_fees');
            $table->integer('road_fees');
            $table->integer('other_fees')->nullable();
            $table->integer('other_fees2')->nullable();
            $table->integer('total_amount');
            $table->integer('old_amount')->nullable();
            $table->integer('req_transactions');
            $table->integer('notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financial_reports');
    }
}
