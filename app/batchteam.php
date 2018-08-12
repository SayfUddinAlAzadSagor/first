<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class batchteam extends Model
{
    public $fillable = ['name','batch','logo','description','tournament_id'];

    public function profiles(){

     return $this->hasMany('App\profile');
    }
    public function managers(){

     return $this->hasMany('App\manager');
    }

    public function tournament(){

     return $this->belongsTo('App\tournament');
    }

     public function scopeSearch($query, $s){
    	return $query->where('name','like','%'.$s.'%')->orWhere('description','like','%'.$s.'%');
    }
}
