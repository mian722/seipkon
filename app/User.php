<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Clicks;
use App\Offer;

class User extends Authenticatable
{
    use Notifiable;

    public function role(){
        return $this->belongsToMany(Roles::class,'users', 'id', 'roles_id');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'contactno', 'imid', 'imaccount', 'email', 'password', 'subdomain', 'roles_id', 'admin_id', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function assignoffers(){
        return $this->belongsToMany(Offer::class,'assignoffers');
    }

    public function getoffers(){

        return $this->hasMany(Offer::class, 'adv_id', 'id');
    }

    public function findoffers($id){
        return $this->getoffers()->where('id', $id);
    }


}
