<?php

namespace fv\yii\imagefilters;

use yii\imagine\Image;

class Thumbnail extends \yii\base\BaseObject
    implements \fv\yii\imagefilter\Filter
{
    public $width;

    public $height;

    public $mode = \Imagine\Image\ImageInterface::THUMBNAIL_OUTBOUND;


    public function filterImage($src, $dest) {
        Image::thumbnail($src, $this->width, $this->height, $this->mode)
            ->save($dest);
    }
}
