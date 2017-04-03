<?php

namespace MatchMyPicsBundle\Entity;

/**
 * Photo
 */
class Photo
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $sources;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sources
     *
     * @param string $sources
     *
     * @return Photo
     */
    public function setSources($sources)
    {
        $this->sources = $sources;

        return $this;
    }

    /**
     * Get sources
     *
     * @return string
     */
    public function getSources()
    {
        return $this->sources;
    }
}

