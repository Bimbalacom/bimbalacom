<?php
declare(strict_types=1);

if(!function_exists('getImageDimensions')){
    /**
     * @param $imagePath
     * @return array
     */
    function getImageDimensions($imagePath): array
    {
        [$width, $height] = getimagesize($imagePath);
        return compact('width', 'height');
    }
}
