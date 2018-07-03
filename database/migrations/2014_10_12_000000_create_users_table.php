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
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('pincode')->nullable();
            $table->string('company')->nullable();
            $table->string('website')->nullable();
            $table->string('subdomain')->nullable();
            $table->string('skype')->nullable();
            $table->string('country')->nullable();
            $table->string('contact')->nullable();
            $table->string('address')->nullable();
            $table->tinyInteger('roletype')->nullable();
            $table->tinyInteger('status')->defalut(0);
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
