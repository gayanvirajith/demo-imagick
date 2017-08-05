<?php

/**
 * Class ImageMagick
 */
class ImageMagick
{
    protected $executablePath;

    /**
     * ImageMagick constructor.
     * @param $executablePath
     */
    public function __construct($executablePath)
    {
        $this->executablePath = $executablePath;
    }

    /**
     * Returns executable path of ImageMagick
     */
    public function getExecutablePath()
    {
        return $this->executablePath;
    }
}