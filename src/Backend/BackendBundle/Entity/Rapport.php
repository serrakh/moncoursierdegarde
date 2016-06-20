<?php

namespace Backend\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rapport
 *
 * @ORM\Table(name="rapport")
 * @ORM\Entity(repositoryClass="Backend\BackendBundle\Repository\RapportRepository")
 */
class Rapport
{
    /**
     * @ORM\OneToMany(targetEntity="Backend\BackendBundle\Entity\Livreur" , mappedBy="rapport")
     */
    private $livreurs;


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

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
     * @return Rapport
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
}
