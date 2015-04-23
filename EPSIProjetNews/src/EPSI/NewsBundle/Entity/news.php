<?php

namespace EPSI\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * news
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EPSI\NewsBundle\Entity\newsRepository")
 */
class news
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;


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
     * @return news
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
     * Set contenu
     *
     * @param string $contenu
     * @return news
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
     * Set date
     *
     * @param \DateTime $date
     * @return news
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="categorie")
     * @ORM\JoinColumn(name="categorie_id",referencedColumnName="id",nullable=false)
     */
    private $categorie;
    
    /**
     * @ORM\ManyToMany(targetEntity="tag")
     */
    private $tag;
    public function __construct() {
        $this->tag = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="EPSI\UserBundle\Entity\user")
     * @ORM\JoinColumn(name="user_id",referencedColumnName="id",nullable=false)
     */
    private $user;

    /**
     * Set categorie
     *
     * @param \EPSI\NewsBundle\Entity\categorie $categorie
     * @return news
     */
    public function setCategorie(\EPSI\NewsBundle\Entity\categorie $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \EPSI\NewsBundle\Entity\categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Add tag
     *
     * @param \EPSI\NewsBundle\Entity\tag $tag
     * @return news
     */
    public function addTag(\EPSI\NewsBundle\Entity\tag $tag)
    {
        $this->tag[] = $tag;

        return $this;
    }

    /**
     * Remove tag
     *
     * @param \EPSI\NewsBundle\Entity\tag $tag
     */
    public function removeTag(\EPSI\NewsBundle\Entity\tag $tag)
    {
        $this->tag->removeElement($tag);
    }

    /**
     * Get tag
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set user
     *
     * @param \EPSI\UserBundle\Entity\user $user
     * @return news
     */
    public function setUser(\EPSI\UserBundle\Entity\user $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \EPSI\UserBundle\Entity\user 
     */
    public function getUser()
    {
        return $this->user;
    }
}
