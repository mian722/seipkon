<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagerRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manager_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('admin_id');
            $table->string('name');
            $table->string('description');
            $table->tinyInteger('account_management')->default('0');
            $table->tinyInteger('advertiser_management')->default('0');
            $table->tinyInteger('affiliate_management')->default('0');
            $table->tinyInteger('offer_management')->default('0');
            $table->tinyInteger('global_management')->default('0');
            $table->tinyInteger('report_management')->default('0');
            $table->tinyInteger('setting_management')->default('0');
            $table->tinyInteger('smart_puller_management')->default('0');
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
        Schema::dropIfExists('manager_roles');
    }
}
