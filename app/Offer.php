<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    
    public function restrictions(){
        return $this->hasOne(OfferRestriction::class, 'offer_id');
    }
}
