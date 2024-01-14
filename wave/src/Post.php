<?php

namespace Wave;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperPost
 */
class Post extends Model
{
    public const STATUS_PUBLISHED = 'PUBLISHED';

    public function link(){
    	return url('/blog/' . $this->category->slug . '/' . $this->slug);
    }

    public function user(){
        return $this->belongsTo('\Wave\User', 'author_id');
    }

    public function image(){
    	return \Voyager::image($this->image);
    }

    public function category(){
    	return $this->belongsTo('Wave\Category');
    }
}
