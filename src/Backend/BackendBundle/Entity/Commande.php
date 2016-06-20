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
}
