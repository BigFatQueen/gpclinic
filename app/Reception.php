<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reception extends Model
{
    
	use SoftDeletes;
    protected $fillable=['user_id','owner_id','gender','phoneno','education','address','file'];
    
     public function user(){
    	return $this->belongsTo('App\User');
    }

    public function owner(){
    	return $this->belongsTo('App\Owner');
    }

     public function appointments(){
        return $this->hasManyThrough('App\Appointment','App\Doctor','App\Owner');
    }
}
