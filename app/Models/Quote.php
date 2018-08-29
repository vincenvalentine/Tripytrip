<?php

namespace App\Models;
use Auth;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    
    protected $fillable = [
        'title', 'slug', 'subject', 'user_id'
    ];


    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }


 public function isOwner()
    { 
    	return Auth::user()->id == $this->user->id;
    }
    
}
