<?php

namespace MatchMyPicsBundle\Entity;

/**
 * Parametres
 */
class Parametre
{
    const CHALENGE_TYPE = 1;
    const INDICE_TYPE = 2;

    public function __toString()
    {
        return $this->param;
    }

    // Code généré :

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $niveau;

    /**
     * @var integer
     */
    private $points;


    /**
     * Get id
     *
     * @return integer
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
     * @return integer
     */
    public function getPoints()
    {
        return $this->points;
    }
    /**
     * @var string
     */
    private $param;


    /**
     * Set param
     *
     * @param string $param
     *
     * @return Parametre
     */
    public function setParam($param)
    {
        $this->param = $param;

        return $this;
    }

    /**
     * Get param
     *
     * @return string
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * @var integer
     */
    private $type;


    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Parametre
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }
}
