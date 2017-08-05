<?php

/**
 * Class ImageMagickFactory
 */
class ImageMagickFactory
{

    /**
     * Returns an ImageMagick instance based on OS type
     * @return ImageMagick
     */
    public static function make()
    {
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            return new ImageMagick(IMAGE_MAGICK_WINDOWS_PATH);
        } else {
            return new ImageMagick(IMAGE_MAGICK_LINUX_PATH);
        }

    }
}