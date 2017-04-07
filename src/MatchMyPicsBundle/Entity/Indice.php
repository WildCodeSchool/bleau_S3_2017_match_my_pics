<?php

namespace MatchMyPicsBundle\Entity;

/**
 * Indices
 */
class Indice
{


    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $contenu;

    /**
     * @var \MatchMyPicsBundle\Entity\Photo
     */
    private $photo;

    /**
     * @var \MatchMyPicsBundle\Entity\Parametre
     */
    private $parametre;


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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Indice
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set photo
     *
     * @param \MatchMyPicsBundle\Entity\Photo $photo
     *
     * @return Indice
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
     * Set parametre
     *
     * @param \MatchMyPicsBundle\Entity\Parametre $parametre
     *
     * @return Indice
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
