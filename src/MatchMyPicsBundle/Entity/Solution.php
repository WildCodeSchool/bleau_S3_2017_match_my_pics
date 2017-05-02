<?php

namespace MatchMyPicsBundle\Entity;

/**
 * Solutions
 */
class Solution
{
    public function __construct()
    {
        $this->etat = 0;
    }


    /*code genéré */


    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $etat;

    /**
     * @var \MatchMyPicsBundle\Entity\Photo
     */
    private $photo;

    /**
     * @var \MatchMyPicsBundle\Entity\Challenge
     */
    private $challenge;

    /**
     * @var \MatchMyPicsBundle\Entity\Team
     */
    private $team;


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
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Solution
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set photo
     *
     * @param \MatchMyPicsBundle\Entity\Photo $photo
     *
     * @return Solution
     */
    public function setPhoto(\MatchMyPicsBundle\Entity\Photo $photo = null)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return \MatchMyPicsBundle\Entity\Photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set challenge
     *
     * @param \MatchMyPicsBundle\Entity\Challenge $challenge
     *
     * @return Solution
     */
    public function setChallenge(\MatchMyPicsBundle\Entity\Challenge $challenge = null)
    {
        $this->challenge = $challenge;

        return $this;
    }

    /**
     * Get challenge
     *
     * @return \MatchMyPicsBundle\Entity\Challenge
     */
    public function getChallenge()
    {
        return $this->challenge;
    }

    /**
     * Set team
     *
     * @param \MatchMyPicsBundle\Entity\Team $team
     *
     * @return Solution
     */
    public function setTeam(\MatchMyPicsBundle\Entity\Team $team = null)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return \MatchMyPicsBundle\Entity\Team
     */
    public function getTeam()
    {
        return $this->team;
    }
}
