<?php

namespace Liip\ImagineBundle\Imagine\Filter\Loader;

/**
 * Upscale filter.
 *
 * @author Maxime Colin <contact@maximecolin.fr>
 * @author Devi Prasad <https://github.com/deviprsd21>
 */
class UpscaleFilterLoader extends ScaleFilterLoader
{
    public function __construct()
    {
        parent::__construct('min', 'by', false);
    }

    protected function calcAbsoluteRatio($ratio)
    {
        return 1 + $ratio;
    }

    protected function isImageProcessable($ratio)
    {
        return $ratio > 1;
    }
}
