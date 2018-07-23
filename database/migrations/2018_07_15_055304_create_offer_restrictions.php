<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferRestrictions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_restrictions', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('offer_id');
            $table->string('advertiser_caps_type');
            $table->string('advertiser_caps_value')->nullable();
            $table->string('affiliate_caps_type');
            $table->string('affiliate_caps_value')->nullable();
            $table->string('caps_timezone')->nullable();
            $table->string('redirect_offer')->nullable();
            $table->string('offer_pool')->nullable();
            $table->string('tracking_domain')->nullable();
            $table->tinyInteger('ssl')->defalut(0);
            $table->tinyInteger('lead_traffic_preview_url')->defalut(0);
            $table->tinyInteger('unique_ip_tracking')->defalut(0);
            $table->string('geo_targeting')->nullable();
            $table->string('geo_type')->defalut(0);
            $table->string('mobile_carrier_targeting')->nullable();
            $table->string('platform_targeting')->nullable();
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
        Schema::dropIfExists('offer_restrictions');
    }
}
