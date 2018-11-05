<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackingdomain', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('admin_id');
            $table->string('domain')->nullable();
            $table->tinyInteger('sslstatus');
            $table->tinyInteger('status');
            $table->tinyInteger('is_default');
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
        Schema::dropIfExists('trackingdomain');
    }
}
