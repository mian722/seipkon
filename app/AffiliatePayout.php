<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AffiliatePayout extends Model
{
    protected $table = 'affiliate_payout';

    public static function isDuplicated($inputs)
    {
        $exists = self::where('offer_id', $inputs['offerid'])
                       ->where('affiliate_id', $inputs['affiliateid'])
                       ->count();

        return $exists ? 'true' : 'false';
    }

}
