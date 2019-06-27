<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{

	protected $table = 'posts';
    protected $fillable=[
    	'title','description','address','image'
    ];
}
