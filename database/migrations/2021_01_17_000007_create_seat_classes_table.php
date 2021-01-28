<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeatClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat_classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('seat_color');
            $table
                ->unsignedBigInteger('seat_plan_id')
               
                ->nullable();

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
        Schema::dropIfExists('seat_classes');
    }
}
