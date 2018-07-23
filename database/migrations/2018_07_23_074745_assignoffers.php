<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Assignoffers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignoffers', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('affiliate_id');
            $table->tinyInteger('offer_id');
            $table->string('postbacklink');
            $table->string('usertracklink');
            $table->tinyInteger('status')->default('0');
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
        Schema::dropIfExists('assignoffers');
    }
}
