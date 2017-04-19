<?php

namespace MatchMyPicsBundle\Entity;

/**
 * Etat
 */
class Etat
{
    const ENGAGE = 'engagé';
    const OPEN = 'non engagé';
    const STANDBY = 'en attente de validation';
    const VALIDATE = 'validé';
    const REFUSE = 'à refaire';

    /*GENERATE CODE*/

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $statut;

    /**
     * @var \MatchMyPicsBundle\Entity\Team
     */
    private $team;

    /**
     * @var \MatchMyPicsBundle\Entity\Challenge
     */
    private $challenge;


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
     * Set statut
     *
     * @param string $statut
     *
     * @return Etat
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set team
     *
     * @param \MatchMyPicsBundle\Entity\Team $team
     *
     * @return Etat
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

    /**
     * Set challenge
     *
     * @param \MatchMyPicsBundle\Entity\Challenge $challenge
     *
     * @return Etat
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
}
