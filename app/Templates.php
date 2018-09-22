<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Templates extends Model
{
	protected $fillable = [
    'emailstring',
    'admin_id',
    'email_subject',
    'email_type'
];
    protected $table = 'email_templates';

}
