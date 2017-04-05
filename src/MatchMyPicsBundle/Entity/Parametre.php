<?php

namespace MatchMyPicsBundle\Entity;

/**
 * Parametres
 */
class Parametre
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $niveau;

    /**
     * @var int
     */
    private $points;


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
     * Set niveau
     *
     * @param string $niveau
     *
     * @return Parametre
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set points
     *
     * @param integer $points
     *
     * @return Parametre
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return int
     */
    public function getPoints()
    {
        return $this->points;
    }
}
