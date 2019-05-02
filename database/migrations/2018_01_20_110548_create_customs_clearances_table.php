<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomsClearancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customs_clearances', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('importer')->nullable();
            $table->integer('container_20')->nullable();
            $table->integer('container_40')->nullable();
            $table->integer('container_number')->nullable();
            $table->integer('box_number')->nullable();
            $table->integer('policy_no')->nullable();
            $table->string('type')->nullable();
            $table->string('powerOfAttorney')->nullable();
            $table->string('doc_date')->nullable();
            $table->string('container_arrival')->nullable();
            $table->string('date_of_withdrawal')->nullable();
            $table->string('certificate_reg')->nullable();
            $table->integer('certificate_no')->nullable();
            $table->integer('checkup_date')->nullable();
            $table->integer('primary')->nullable();
            $table->string('detection_date')->nullable();
            $table->string('imports_of_varieties')->nullable();
            $table->integer('customs_after_precious')->nullable();
            $table->integer('transaction')->nullable();
            $table->integer('commission_fees')->nullable();
            $table->string('transportation_contractor')->nullable();
            $table->string('matching')->nullable();
            $table->string('resetting')->nullable();
            $table->string('grace_period')->nullable();
            $table->string('pull_permission')->nullable();
            $table->string('flag')->nullable();
            $table->string('notes')->nullable();
            $table->string('employee_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customs_clearances');
    }
}
