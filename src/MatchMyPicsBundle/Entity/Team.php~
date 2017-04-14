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
}
