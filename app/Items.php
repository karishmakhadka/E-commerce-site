<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $fillable = [
    	'title','category_id','image','detail','quantity','price','size','slug'
    ];

     public function category()
    {
        return $this->belongsTo('App\Category','category_id');
    }
}
