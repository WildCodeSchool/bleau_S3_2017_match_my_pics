<?php

namespace MatchMyPicsBundle\Entity;

/**
 * Parametres
 */
class Parametre
{

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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $challenges;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->challenges = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add challenge
     *
     * @param \MatchMyPicsBundle\Entity\Challenge $challenge
     *
     * @return Parametre
     */
    public function addChallenge(\MatchMyPicsBundle\Entity\Challenge $challenge)
    {
        $this->challenges[] = $challenge;

        return $this;
    }

    /**
     * Remove challenge
     *
     * @param \MatchMyPicsBundle\Entity\Challenge $challenge
     */
    public function removeChallenge(\MatchMyPicsBundle\Entity\Challenge $challenge)
    {
        $this->challenges->removeElement($challenge);
    }

    /**
     * Get challenges
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChallenges()
    {
        return $this->challenges;
    }
}
