<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sub_id', 30)->nullable();
            $table->Integer('adv_sub1', 30)->nullable();
            $table->Integer('adv_sub2', 30)->nullable();
            $table->Integer('adv_sub3', 30)->nullable();
            $table->Integer('aff_sub1', 30)->nullable();
            $table->Integer('aff_sub2', 30)->nullable();
            $table->Integer('aff_sub3', 30)->nullable();
            $table->Integer('aff_sub4', 30)->nullable();
            $table->Integer('aff_sub5', 30)->nullable();
            $table->Integer('unique_click')->default(1);
            $table->Integer('conversion_ip')->default(0);
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
        Schema::dropIfExists('parameters');
    }
}
