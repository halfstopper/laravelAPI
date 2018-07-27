<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable = ['title'];
    protected $hidden = ['question'];

    //Relationship. One Poll To Many Questions
    public function questions(){
    	return $this->hasMany('App\Question');
    }
}
