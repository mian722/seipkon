<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClicksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clicks', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('affiliate_id');
            $table->tinyInteger('offer_id');
            $table->tinyInteger('admin_id');
            $table->string('sub_id', 30)->nullable();
            $table->tinyInteger('redirect_click')->default(0);
            $table->tinyInteger('click')->default(1);
            $table->string('reffer_link')->nullable();
            $table->string('ip')->nullable();
            $table->string('device')->nullable();
            $table->string('browser')->nullable();
            $table->string('os')->nullable();
            $table->string('country')->nullable();
            $table->string('proxy')->nullable();
            $table->string('adv_id')->nullable();
            $table->string('status')->default(1);
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
        Schema::dropIfExists('clicks');
    }
}
