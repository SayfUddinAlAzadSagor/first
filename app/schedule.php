<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    public $fillable = ['team_1','team_2','goal_1','goal_2','datetime','check','description','tournament_id'];

    public function tournament(){

     return $this->belongsTo('App\tournament');
    }
}
