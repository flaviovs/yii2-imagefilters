<?php

namespace fv\yii\imagefilters;

use yii\imagine\Image;

class resize extends \yii\base\BaseObject implements \fv\yii\imagefilter\Filter
{
    public $width;

    public $height;

    public $keepAspectRatio = true;

    public $allowUpscaling = false;


    public function filterImage($src, $dest)
    {
        \yii\imagine\Image::resize(
            $src,
            $this->width,
            $this->height,
            $this->keepAspectRatio,
            $this->allowUpscaling
        )->save($dest);
    }
}
