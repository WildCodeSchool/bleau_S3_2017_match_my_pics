<?php

namespace MatchMyPicsBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;


/**
 * Team
 */
class Team extends BaseUser
{
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->score =0;
    }

    // GENERATED CODE

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $score;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Team
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set score
     *
     * @param integer $score
     *
     * @return Team
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer
     */
    public function getScore()
    {
        return $this->score;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $players;


    /**
     * Add player
     *
     * @param \MatchMyPicsBundle\Entity\Players $player
     *
     * @return Team
     */
    public function addPlayer(\MatchMyPicsBundle\Entity\Players $player)
    {
        $this->players[] = $player;

        return $this;
    }

    /**
     * Remove player
     *
     * @param \MatchMyPicsBundle\Entity\Players $player
     */
    public function removePlayer(\MatchMyPicsBundle\Entity\Players $player)
    {
        $this->players->removeElement($player);
    }

    /**
     * Get players
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlayers()
    {
        return $this->players;
    }
    /**
     * @var \MatchMyPicsBundle\Entity\Photo
     */
    private $photo;


    /**
     * Set photo
     *
     * @param \MatchMyPicsBundle\Entity\Photo $photo
     *
     * @return Team
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
}
