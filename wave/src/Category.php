<?php

namespace Wave;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperCategory
 */
class Category extends Model
{
    public function posts(){
    	return $this->hasMany('Wave\Post');
    }
}
