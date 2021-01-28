<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->year('model');
            $table->string('image')->nullable();
            $table
                ->unsignedBigInteger('seat_plan_id')
                ->default(1)
                ->nullable();
            $table
                ->unsignedBigInteger('company_id')
                ->default(1)
                ->nullable();
            $table
                ->unsignedBigInteger('bus_route_id')
                
                ->nullable();
            $table->uuid('bus_number')->default('10');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buses');
    }
}
