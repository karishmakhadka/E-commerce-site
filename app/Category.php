<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
    	'parent_id','title','detail','image','slug'
    ];

    function getParentTitleAttribute(){
    	return $this->category ? $this-> category->title : 'none';
    }

    public function subCategory()
    {
        return $this->hasMany('App\Category','parent_id');
    }

    public function items()
    {
        return $this->hasMany('App\Items');
    }

    public function category(){
    	return $this->belongsTo('App\Category','parent_id');
      }
}
