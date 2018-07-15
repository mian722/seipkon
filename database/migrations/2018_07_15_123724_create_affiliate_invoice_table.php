<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffiliateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliate_invoice', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_no');
            $table->tinyInteger('affiliate_id');
            $table->tinyInteger('status')->default('0');
            $table->string('daterange');
            $table->string('memo')->nullable();
            $table->string('offers_id')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('affiliate_invoice');
    }
}
