<?php

namespace Wave;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperAnnouncement
 */
class Announcement extends Model
{
	public function users(){
		return $this->belongsToMany('Wave\User');
	}
}
