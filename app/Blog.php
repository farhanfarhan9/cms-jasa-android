<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    
    public function categories()
    {
    	return $this->hasOne(Category::class);
    }
}
