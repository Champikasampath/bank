<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCascadeRelationshipsToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('accounts', function (Blueprint $table) {
//            $table->foreign('customer_id')->references('id')->on('customers');
//        });
//
//        Schema::table('transactions', function (Blueprint $table) {
//            $table->foreign('account_id')->references('id')->on('accounts');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tables', function (Blueprint $table) {
            //
        });
    }
}
