<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class ConstructionSite
 * @package App\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ConstructionSiteRepository")
 */
class ConstructionSite
{

    /**
     * @var integer
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @var boolean
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ConstructionSite
     */
    public function setId($id): ConstructionSite
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ConstructionSite
     */
    public function setName($name): ConstructionSite
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return ConstructionSite
     */
    public function setActive($active): ConstructionSite
    {
        $this->active = $active;

        return $this;
    }


}