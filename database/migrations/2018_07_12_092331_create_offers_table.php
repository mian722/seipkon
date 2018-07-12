<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table->increments('id');
        $table->string('name');
        $table->tinyInteger('advid');
        $table->string('tags');
        $table->string('duration');
        $table->string('preview_url');
        $table->string('destination_url');
        $table->string('conversion_protocol')->nullable();
        $table->tinyInteger('conversions_need_approval')->defalut(0);
        $table->tinyInteger('hide_referral')->defalut(0);
        $table->string('description')->nullable();
        $table->string('image')->nullable();
        $table->tinyInteger('status')->defalut(0);
        $table->rememberToken();
        $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
