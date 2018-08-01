<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    
    protected $table = 'invoices';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'invoiceno', 'affiliate_id', 'status', 'currency', 'timezone', 'daterange', 'memo', 'offer_names', 'offer_clicks', 'offer_signups', 'offer_amounts', 'note'
    ];

}
