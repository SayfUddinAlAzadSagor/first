<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class manager extends Model
{
    public $fillable = ['name','batch','image','description','auctionteam_id','batchteam_id'];

    public function batchteam(){

     return $this->belongsTo('App\batchteam');
    }

    public function auctionteam(){

     return $this->belongsTo('App\auctionteam');
    }

    public function scopeSearch($query, $s){
    	return $query->where('name','like','%'.$s.'%')->orWhere('batch','like','%'.$s.'%')->orWhere('description','like','%'.$s.'%');
    }
}
