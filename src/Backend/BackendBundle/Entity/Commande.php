<?php

namespace Backend\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="Backend\BackendBundle\Repository\CommandeRepository")
 */
class Commande
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
     * @var int
     *
     * @ORM\Column(name="etat", type="smallint")
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="numCommande", type="string", length=255)
     */
    private $numCommande;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ordonance", type="boolean")
     */
    private $ordonance;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\OneToOne(targetEntity="Backend\BackendBundle\Entity\Historique" , mappedBy="commande")
     */
    private $historique;


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
     * @param integer $etat
     * @return Commande
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set historique
     *
     * @param \Backend\BackendBundle\Entity\Historique $historique
     * @return Commande
     */
    public function setHistorique(\Backend\BackendBundle\Entity\Historique $historique = null)
    {
        $this->historique = $historique;

        return $this;
    }

    /**
     * Get historique
     *
     * @return \Backend\BackendBundle\Entity\Historique 
     */
    public function getHistorique()
    {
        return $this->historique;
    }

    /**
     * Set numCommande
     *
     * @param string $numCommande
     * @return Commande
     */
    public function setNumCommande($numCommande)
    {
        $this->numCommande = $numCommande;

        return $this;
    }

    /**
     * Get numCommande
     *
     * @return string 
     */
    public function getNumCommande()
    {
        return $this->numCommande;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Commande
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
     * Set ordonance
     *
     * @param boolean $ordonance
     * @return Commande
     */
    public function setOrdonance($ordonance)
    {
        $this->ordonance = $ordonance;

        return $this;
    }

    /**
     * Get ordonance
     *
     * @return boolean 
     */
    public function getOrdonance()
    {
        return $this->ordonance;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Commande
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
