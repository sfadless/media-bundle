<?php

namespace SfadlessCMF\MediaBundle\Entity;

use Sonata\MediaBundle\Entity\BaseGallery as BaseGallery;

/**
 * Class Gallery
 * @package SfadlessCMF\MediaBundle\Entity
 */
class Gallery extends BaseGallery
{
    /**
     * @var int $id
     *
     */
    protected $id;

    /**
     * Get id.
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }
}
