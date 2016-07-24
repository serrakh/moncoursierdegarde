<?php

namespace Backend\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="Backend\BackendBundle\Repository\ClientRepository")
 */
class Client extends User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Backend\BackendBundle\Entity\Historique" , mappedBy="client")
     */
    protected $historiques;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="smallint")
     */
    protected $type;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string" , length=50)
     */
    protected $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    protected $adresse;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="decimal")
     */
    protected $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="decimal")
     */
    protected $longitude;


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
     * Get name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->historiques = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add historiques
     *
     * @param \Backend\BackendBundle\Entity\Historique $historiques
     * @return Client
     */
    public function addHistorique(\Backend\BackendBundle\Entity\Historique $historiques)
    {
        $this->historiques[] = $historiques;

        return $this;
    }

    /**
     * Remove historiques
     *
     * @param \Backend\BackendBundle\Entity\Historique $historiques
     */
    public function removeHistorique(\Backend\BackendBundle\Entity\Historique $historiques)
    {
        $this->historiques->removeElement($historiques);
    }

    /**
     * Get historiques
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHistoriques()
    {
        return $this->historiques;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Client
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return Client
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Client
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return Client
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return Client
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
}
