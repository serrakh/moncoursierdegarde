<?php

namespace Backend\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table(name="groupe")
 * @ORM\Entity(repositoryClass="Backend\BackendBundle\Repository\GroupeRepository")
 */
class Groupe
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity="Backend\BackendBundle\Entity\Livreur" , mappedBy="groupe")
     */
    private $livreurs;

    /**
     * @ORM\OneToMany(targetEntity="Backend\BackendBundle\Entity\PharmaGarde" , mappedBy="groupe")
     */
    private $pharmaGardes;

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
     * Set libelle
     *
     * @param string $libelle
     * @return Groupe
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->livreurs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add livreurs
     *
     * @param \Backend\BackendBundle\Entity\Livreur $livreurs
     * @return Groupe
     */
    public function addLivreur(\Backend\BackendBundle\Entity\Livreur $livreurs)
    {
        $this->livreurs[] = $livreurs;

        return $this;
    }

    /**
     * Remove livreurs
     *
     * @param \Backend\BackendBundle\Entity\Livreur $livreurs
     */
    public function removeLivreur(\Backend\BackendBundle\Entity\Livreur $livreurs)
    {
        $this->livreurs->removeElement($livreurs);
    }

    /**
     * Get livreurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLivreurs()
    {
        return $this->livreurs;
    }

    /**
     * Add pharmaGardes
     *
     * @param \Backend\BackendBundle\Entity\PharmaGarde $pharmaGardes
     * @return Groupe
     */
    public function addPharmaGarde(\Backend\BackendBundle\Entity\PharmaGarde $pharmaGardes)
    {
        $this->pharmaGardes[] = $pharmaGardes;

        return $this;
    }

    /**
     * Remove pharmaGardes
     *
     * @param \Backend\BackendBundle\Entity\PharmaGarde $pharmaGardes
     */
    public function removePharmaGarde(\Backend\BackendBundle\Entity\PharmaGarde $pharmaGardes)
    {
        $this->pharmaGardes->removeElement($pharmaGardes);
    }

    /**
     * Get pharmaGardes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPharmaGardes()
    {
        return $this->pharmaGardes;
    }
}
