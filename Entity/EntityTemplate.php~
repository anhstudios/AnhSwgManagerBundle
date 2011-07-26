<?php

namespace Anh\SwgManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="entity_template")
 */
class EntityTemplate
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length="255")
     */
    protected $label;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\ManyToMany(targetEntity="Component", inversedBy="templates")
     * @ORM\JoinTable(name="templates_components")
     */
    protected $components;
    public function __construct()
    {
        $this->components = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set label
     *
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add components
     *
     * @param Anh\SwgManagerBundle\Entity\Component $components
     */
    public function addComponents(\Anh\SwgManagerBundle\Entity\Component $components)
    {
        $this->components[] = $components;
    }

    /**
     * Get components
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getComponents()
    {
        return $this->components;
    }
}