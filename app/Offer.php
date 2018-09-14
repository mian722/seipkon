<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Clicks;
use App\Offer;
use App\OfferRestriction;

class Offer extends Model
{
    
    protected $table = 'offers';

    public function restrictions(){
        return $this->hasOne(OfferRestriction::class, 'offer_id');
    }

    public function clicks(){
        return $this->hasMany(Clicks::class, 'offer_id');
    }
}
