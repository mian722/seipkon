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
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('offer_name');
            $table->tinyInteger('adv_id')->unsigned()->nullable();
            $table->string('tags')->nullable();
            $table->string('duration');
            $table->tinyInteger('status')->unsigned()->defalut(0);
            $table->string('revenue_type');
            $table->string('revenue');
            $table->string('offer_approval');
            $table->string('payout_type');
            $table->string('payout');
            $table->string('preview_url');
            $table->string('destination_url');
            $table->string('signup_protocol');
            $table->string('signup_need_approval');
            $table->string('description')->nullable();
            $table->tinyInteger('admin_id');
            $table->string('offer_image');
            $table->string('offer_postback');
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
        Schema::dropIfExists('offers');
    }
}
