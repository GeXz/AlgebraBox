<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{


public function categories()
    {
        return $this->belongsToMany('App\Models\Categories', 'categorie_user');
    }
	
}
