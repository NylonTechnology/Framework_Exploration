<?php

namespace TechSuite\PublicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Office
 *
 * @ORM\Table(name="offices")
 * @ORM\Entity(repositoryClass="TechSuite\PublicBundle\Repository\OfficeRepository")
 */
class Office
{

    /**
     * @ORM\ManyToMany(targetEntity="Contact", inversedBy="offices")
     * @ORM\JoinTable(name="contact_office_jn",
     *      joinColumns={@ORM\JoinColumn(name="office_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="contact_id", referencedColumnName="id")}
     * )
     */
    private $contacts;


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
        $this->contacts = new \Doctrine\Common\Collections\ArrayCollection();
    }



    public function getContacts()
    {
        return $this->contacts;
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
