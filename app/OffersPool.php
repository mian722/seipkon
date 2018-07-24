<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OffersPool extends Model
{
    protected $table = 'offers_pool';

    public function offers(){
        return $this->belongsToMany(Offer::class, 'pool_relation', 'offerspool_id', 'offer_id');
    }
}
