<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPostbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_postback', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('affiliate_id');
            $table->string('postback_type');
            $table->tinyInteger('postback_id')->nullable();
            $table->string('postback_protocol');
            $table->string('code');
            $table->tinyInteger('admin_id');
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
        Schema::dropIfExists('user_postback');
    }
}
