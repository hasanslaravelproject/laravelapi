<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignsToSeatClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seat_classes', function (Blueprint $table) {
            $table
                ->foreign('seat_plan_id')
                ->references('id')
                ->on('seat_plans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seat_classes', function (Blueprint $table) {
            $table->dropForeign(['seat_plan_id']);
        });
    }
}
