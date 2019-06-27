<?php

namespace SfadlessCMF\MediaBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * MediaBundle
 *
 * @author Pavel Golikov <pgolikov327@gmail.com>
 */
class MediaBundle extends Bundle
{
    public function getParent()
    {
        return 'SonataMediaBundle';
    }
}