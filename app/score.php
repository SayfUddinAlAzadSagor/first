<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class score extends Model
{
    public $fillable = ['team','mp','win','draw','loss','point','tournament_id'];
    
    public function tournament(){

     return $this->belongsTo('App\tournament');
    }
}
