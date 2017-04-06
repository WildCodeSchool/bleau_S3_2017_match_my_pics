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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $challenge;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->challenge = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Add challenge
     *
     * @param \MatchMyPicsBundle\Entity\Challenge $challenge
     *
     * @return Etat
     */
    public function addChallenge(\MatchMyPicsBundle\Entity\Challenge $challenge)
    {
        $this->challenge[] = $challenge;

        return $this;
    }

    /**
     * Remove challenge
     *
     * @param \MatchMyPicsBundle\Entity\Challenge $challenge
     */
    public function removeChallenge(\MatchMyPicsBundle\Entity\Challenge $challenge)
    {
        $this->challenge->removeElement($challenge);
    }

    /**
     * Get challenge
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChallenge()
    {
        return $this->challenge;
    }
}
