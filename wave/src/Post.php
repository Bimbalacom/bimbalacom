<?php

namespace Wave;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Storage;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Resizable;

/**
 * @mixin IdeHelperPost
 */
class Post extends Model
{
    use Resizable;

    public const STATUS_PUBLISHED = 'PUBLISHED';

    public function link(){
    	return url('/blog/' . $this->category->slug . '/' . $this->slug);
    }

    public function user(){
        return $this->belongsTo('\Wave\User', 'author_id');
    }

    public function image(){
    	return Voyager::image($this->image);
    }

    public function category(){
    	return $this->belongsTo('Wave\Category');
    }

    public function getThumbnailSizes(): Attribute
    {
        return Attribute::make(
            get: function(): array {
                $thumbnailPaths = [
                    $this->thumbnail('cropped'),
                    $this->thumbnail('small'),
                    $this->thumbnail('medium'),
                    $this->image,
                ];
                $thumbnailSizes = [];
                foreach ($thumbnailPaths as $thumbnailPath) {
                    $thumbnailSizes[$thumbnailPath] = getImageDimensions(Storage::disk(config('voyager.storage.disk'))->path($thumbnailPath));
                }

                return $thumbnailSizes;
            },
        );
    }
}
