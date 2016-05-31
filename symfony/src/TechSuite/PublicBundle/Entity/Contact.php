<?php

namespace TechSuite\PublicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contacts")
 * @ORM\Entity(repositoryClass="TechSuite\PublicBundle\Repository\ContactRepository")
 */
class Contact
{


    /**
     * @ORM\ManyToMany(targetEntity="Office", inversedBy="contacts")
     * @ORM\JoinTable(name="contact_office_jn",
     *      joinColumns={@ORM\JoinColumn(name="contact_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="office_id", referencedColumnName="id")}
     * )
     */
    private $offices;


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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;




    public function __construct() {
        $this->offices = new \Doctrine\Common\Collections\ArrayCollection();
    }



    public function getOffices()
    {
        return $this->offices;
    }



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Contact
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }







}
