<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
    	'item_id','username','email','phone','quantity','price'
    ];

    protected $attributes = [
    	'status'=> 0,
    ];
}
