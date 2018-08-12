<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    public $fillable = ['name','registration_no','rating','jarsey_no','batch','image','position','description','auctionteam_id','batchteam_id'];

    public function auctionteam(){

     return $this->belongsTo('App\auctionteam');
    }

    public function batchteam(){

     return $this->belongsTo('App\batchteam');
    }

    public function scopeSearch($query, $s){
    	return $query->where('name','like','%'.$s.'%')->orWhere('batch','like','%'.$s.'%')->orWhere('registration_no','like','%'.$s.'%')->orWhere('position','like','%'.$s.'%');
    }
}
