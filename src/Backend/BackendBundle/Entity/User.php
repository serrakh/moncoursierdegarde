<?php
/**
 * Created by PhpStorm.
 * User: Mssef
 * Date: 01/07/2016
 * Time: 23:02
 */

namespace Backend\BackendBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    protected $type;

    /**
     *  @var string
     *
     * @ORM\Column(name="mobile", type="string", length=255)
     */
    protected $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    protected $adresse;

    /**
     *
     * @ORM\Column(name="latitude", type="decimal", nullable=true)
     */
    protected $latitude;

    /**
     * @ORM\Column(name="longitude", type="decimal", nullable=true)
     */
    protected $longitude;
}