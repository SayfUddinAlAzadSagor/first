<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tournament extends Model
{
    public $fillable = ['name','session','type','description'];
    
    public function auctionteams(){

      return $this->hasMany('App\auctionteam');
    }
    public function batchteams(){

      return $this->hasMany('App\batchteam');
    }
    public function scores(){

      return $this->hasMany('App\score');
    }
    public function schedules(){

      return $this->hasMany('App\schedule');
    }
     

     public function scopeSearch($query, $s){
    	return $query->where('name','like','%'.$s.'%')->orWhere('session','like','%'.$s.'%')->orWhere('type','like','%'.$s.'%')->orWhere('description','like','%'.$s.'%');
    }
}
