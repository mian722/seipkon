<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clicks extends Model
{
    protected $table = 'clicks';

    public function parameters(){
        return $this->hasOne(Parameters::class, 'sub_id', 'sub_id');
    }
}
