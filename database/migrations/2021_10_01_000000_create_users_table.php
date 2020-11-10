<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('firstname');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('email_verified_at');
            $table->string('password');
            $table->string('type')->default('al');
            $table->unsignedInteger('enterprise_id');
            $table->foreign('enterprise_id')->references('id')->on('enterprises');
            $table->unsignedInteger('cycle_id');
            $table->foreign('cycle_id')->references('id')->on('cycles');
            $table->rememberToken();
            $table->boolean('deleted')->default(false);
=======
            $table->string('email_verified_at')->unique();
            $table->string('password');
            $table->string('type');
            $table->unsignedInteger('enterprise_id');
            $table->foreign('enterprise_id')->references('id')->on('enterprises');
            $table->foreign('cycle_id')->references('id')->on('cycles');
            $table->rememberToken();
            $table->boolean('deleted')->default(0);
>>>>>>> 0fb5282f6a96878d5e46fb3ccfad53724ce8e04d:database/migrations/2020_10_16_000000_create_users_table.php
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
