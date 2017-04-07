<?php

namespace MatchMyPicsBundle\Entity;

/**
 * Etat
 */
class Etat
{

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
    private $teams;

    /**
     * @var \MatchMyPicsBundle\Entity\Challenge
     */
    private $challenges;


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
     * Set teams
     *
     * @param \MatchMyPicsBundle\Entity\Team $teams
     *
     * @return Etat
     */
    public function setTeams(\MatchMyPicsBundle\Entity\Team $teams = null)
    {
        $this->teams = $teams;

        return $this;
    }

    /**
     * Get teams
     *
     * @return \MatchMyPicsBundle\Entity\Team
     */
    public function getTeams()
    {
        return $this->teams;
    }

    /**
     * Set challenges
     *
     * @param \MatchMyPicsBundle\Entity\Challenge $challenges
     *
     * @return Etat
     */
    public function setChallenges(\MatchMyPicsBundle\Entity\Challenge $challenges = null)
    {
        $this->challenges = $challenges;

        return $this;
    }

    /**
     * Get challenges
     *
     * @return \MatchMyPicsBundle\Entity\Challenge
     */
    public function getChallenges()
    {
        return $this->challenges;
    }
    /**
     * @var \MatchMyPicsBundle\Entity\Team
     */
    private $team;

    /**
     * @var \MatchMyPicsBundle\Entity\Challenge
     */
    private $challenge;


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
