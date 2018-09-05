<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OffersPool extends Model
{
    protected $table = 'offers_pool';

    public function offers(){
        return $this->belongsToMany(Offer::class, 'pool_relation', 'pool_id', 'offer_id');
    }
}

/*
select `offers`.*, `pool_relation`.`pool_id` as `pivot_pool_id`, `pool_relation`.`offer_id` as `pivot_offer_id` from `offers` inner join `pool_relation` on `offers`.`id` = `pool_relation`.`offer_id` where `pool_relation`.`pool_id` in (1, 2)