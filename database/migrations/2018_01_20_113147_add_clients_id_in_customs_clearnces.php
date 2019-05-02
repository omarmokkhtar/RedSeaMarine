<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddClientsIdInCustomsClearnces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('customs_clearances', function (Blueprint $table) {
                $table->unsignedInteger('clients_id')->after('id');
                $table->foreign('clients_id')
                    ->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customs_clearances', function (Blueprint $table) {
            //
        });
    }
}
