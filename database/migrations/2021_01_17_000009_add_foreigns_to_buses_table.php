<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignsToBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('buses', function (Blueprint $table) {
            $table
                ->foreign('seat_plan_id')
                ->references('id')
                ->on('seat_plans');
            $table
                ->foreign('company_id')
                ->references('id')
                ->on('companies');
            $table
                ->foreign('bus_route_id')
                ->references('id')
                ->on('bus_routes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('buses', function (Blueprint $table) {
            $table->dropForeign(['seat_plan_id']);
            $table->dropForeign(['company_id']);
            $table->dropForeign(['bus_route_id']);
        });
    }
}
