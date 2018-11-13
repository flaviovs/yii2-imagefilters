Image filters for the Yii2 Imagefilter extension
================================================

This package provides image filters for the [Yii2 Imagefilter] extension.

Currently, the following filter is available:

* `fv\yii\imagefilters\Thumbnail` (`width`, `height`, `mode`) - create a
  thumbnail for an image. Mode is either `THUMBNAIL_INSET` or
  `THUMBNAIL_OUTBOUND` (default) constants defined in
  `Imagine\Image\ImageInterface`. See
  https://www.yiiframework.com/extension/yiisoft/yii2-imagine/doc/api/2.2/yii-imagine-baseimage#thumbnail()-detail

* `fv\yii\imagefilters\Resize` (`width`, `height`, `keepAspectRatio`,
  `allowUpscaling`) - resize na image. See https://www.yiiframework.com/extension/yiisoft/yii2-imagine/doc/api/2.2/yii-imagine-baseimage#resize()-detail

Patches for more filters are welcome.


How to use
----------

Add these filters to your Yii2 Imagefilter pipelines:

```php
[
    'class' => \fv\yii\imagefilters\Thumbnail::class,
    'width' => 100,
    'height' => 100,
    'mode' => \Imagine\Image\ImageInterface::THUMBNAIL_INSET,
]
```


Support
-------
https://github.com/flaviovs/yii2-imagefilters


[Yii2 Imagefilter]: https://github.com/flaviovs/yii2-imagefilter
