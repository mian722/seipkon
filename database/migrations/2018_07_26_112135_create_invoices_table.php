<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoiceno');
            $table->tinyInteger('affiliate_id');
            $table->tinyInteger('status')->default('0');
            $table->string('currency');
            $table->string('timezone');
            $table->string('daterange');
            $table->string('memo');
            $table->string('offer_names');
            $table->string('offer_clicks');
            $table->string('offer_signups');
            $table->string('offer_amounts');
            $table->string('offerdetails');
            $table->string('note');
            $table->tinyInteger('user_role_id');
            $table->string('admin_id');
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
        Schema::dropIfExists('invoices');
    }
}
