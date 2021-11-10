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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->enum('gender', ['male', 'female', 'others']);
            $table->bigInteger('division_id')->unsigned();
            $table->bigInteger('district_id')->unsigned();
            $table->boolean('meal_mode')->default(0);
            $table->boolean('breakfast_mode')->default(0);
            $table->boolean('dinner_mode')->default(0);
            $table->boolean('lunch_mode')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
