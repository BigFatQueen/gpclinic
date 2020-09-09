<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Appointment extends Model
{
	use SoftDeletes;
    protected $fillable=['name','doctor_id','phone','A_Date','TokenNo','status'];

    public function doctor(){
    	return $this->belongsTo('App\Doctor');
    }
}
