<?php

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
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('nickname')->unique();
            $table->integer('country_id')->unsigned()->nullable();
            $table->date('birthday')->nullable();
            $table->string('website')->nullable();
            $table->boolean('show_profile')->default(true);
            $table->boolean('volunteer')->default(false);
            $table->enum('user_type', ['developer', 'recruiter'])->default('developer');
            $table->rememberToken();
            $table->timestamps();

            $table->index('country_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
