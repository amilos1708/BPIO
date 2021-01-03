<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_movements', function (Blueprint $table) {
            $table->id();
            $table->date('date_start_moving');
            $table->date('date_stop_moving');
            $table->decimal('beginning_km');
            $table->integer('fuel_status');
            $table->text('note');
            $table->timestamps();

            //spoji s tablicom purposes, kolonom id
            $table->foreignId('purpose_id')->constrained();

            //spoji s tablicom vehicles, kolonom id
            $table->foreignId('vehicle_id')->constrained();

            //spoji s tablicom users, kolonom id
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_movements');
    }
}
