<?php

namespace MatchMyPicsBundle\Entity;

/**
 * Challenges
 */
class Challenge
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $position;

    /**
     * @var \MatchMyPicsBundle\Entity\Indice
     */
    private $indice;

    /**
     * @var \MatchMyPicsBundle\Entity\Photo
     */
    private $photo;

    /**
     * @var \MatchMyPicsBundle\Entity\Parametre
     */
    private $parametres;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return Challenge
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Challenge
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set indice
     *
     * @param \MatchMyPicsBundle\Entity\Indice $indice
     *
     * @return Challenge
     */
    public function setIndice(\MatchMyPicsBundle\Entity\Indice $indice = null)
    {
        $this->indice = $indice;

        return $this;
    }

    /**
     * Get indice
     *
     * @return \MatchMyPicsBundle\Entity\Indice
     */
    public function getIndice()
    {
        return $this->indice;
    }

    /**
     * Set photo
     *
     * @param \MatchMyPicsBundle\Entity\Photo $photo
     *
     * @return Challenge
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
     * Set parametres
     *
     * @param \MatchMyPicsBundle\Entity\Parametre $parametres
     *
     * @return Challenge
     */
    public function setParametres(\MatchMyPicsBundle\Entity\Parametre $parametres = null)
    {
        $this->parametres = $parametres;

        return $this;
    }

    /**
     * Get parametres
     *
     * @return \MatchMyPicsBundle\Entity\Parametre
     */
    public function getParametres()
    {
        return $this->parametres;
    }
    /**
     * @var \MatchMyPicsBundle\Entity\Parametre
     */
    private $parametre;


    /**
     * Set parametre
     *
     * @param \MatchMyPicsBundle\Entity\Parametre $parametre
     *
     * @return Challenge
     */
    public function setParametre(\MatchMyPicsBundle\Entity\Parametre $parametre = null)
    {
        $this->parametre = $parametre;

        return $this;
    }

    /**
     * Get parametre
     *
     * @return \MatchMyPicsBundle\Entity\Parametre
     */
    public function getParametre()
    {
        return $this->parametre;
    }
}
