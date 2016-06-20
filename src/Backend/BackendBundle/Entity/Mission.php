<?php

namespace Backend\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mission
 *
 * @ORM\Table(name="mission")
 * @ORM\Entity(repositoryClass="Backend\BackendBundle\Repository\MissionRepository")
 */
class Mission
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
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="Backend\BackendBundle\Entity\Livreur" , inversedBy="missions")
     */
    private $livreur;

    /**
     * @ORM\OneToMany(targetEntity="Backend\BackendBundle\Entity\HistoriqueMission" , mappedBy="mession")
     */
    private $historiqueMissions;


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
     * @return Mission
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
     * Set description
     *
     * @param string $description
     * @return Mission
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

    /**
     * Set livreur
     *
     * @param \Backend\BackendBundle\Entity\Livreur $livreur
     * @return Mission
     */
    public function setLivreur(\Backend\BackendBundle\Entity\Livreur $livreur = null)
    {
        $this->livreur = $livreur;

        return $this;
    }

    /**
     * Get livreur
     *
     * @return \Backend\BackendBundle\Entity\Livreur 
     */
    public function getLivreur()
    {
        return $this->livreur;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->historiqueMissions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add historiqueMissions
     *
     * @param \Backend\BackendBundle\Entity\HistoriqueMission $historiqueMissions
     * @return Mission
     */
    public function addHistoriqueMission(\Backend\BackendBundle\Entity\HistoriqueMission $historiqueMissions)
    {
        $this->historiqueMissions[] = $historiqueMissions;

        return $this;
    }

    /**
     * Remove historiqueMissions
     *
     * @param \Backend\BackendBundle\Entity\HistoriqueMission $historiqueMissions
     */
    public function removeHistoriqueMission(\Backend\BackendBundle\Entity\HistoriqueMission $historiqueMissions)
    {
        $this->historiqueMissions->removeElement($historiqueMissions);
    }

    /**
     * Get historiqueMissions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHistoriqueMissions()
    {
        return $this->historiqueMissions;
    }
}
