<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmtpDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smtpdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('admin_id');
            $table->string('smtp_server')->nullable();
            $table->string('security_type')->nullable();
            $table->string('port')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('nickname')->nullable();
            $table->string('email')->nullable();
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
       Schema::dropIfExists('smtpdetails');
    }
}
