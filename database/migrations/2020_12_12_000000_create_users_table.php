<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('email')->unique();
            $table->string('password');
            $table->date('date_birth')->nullable();
            $table->date('date_employment')->nullable();
            $table->integer('drivers_license_id')->nullable();
            $table->string('phone_number', 20)->nullable();


            //spoji s tablicom countries, kolonom id
            $table->foreignId('country_id')
                ->nullable()
                ->constrained();

            //spoji s tablicom roles, kolonom id
            $table->foreignId('role_id')
                ->constrained();

            //spoji s tablicom sexes, kolonom id
            $table->foreignId('sex_id')
                ->constrained();


            //created_at, updated_at
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
        Schema::dropIfExists('users');
    }
}
