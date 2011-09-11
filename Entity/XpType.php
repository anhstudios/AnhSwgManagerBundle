<?php
/**
 * Represents a process being managed by the server directory.
 *
 * Copyright (c) 2011 Eric Barr <eb@anhstudios.com>
 */

namespace Anh\SwgManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="xp_type")
 */
class XpType
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\generatedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length="255")
     */
    private $label;
    
    /**
     * @ORM\Column(type="string", length="255")
     */
    private $name;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $cap;

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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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

    /**
     * Set cap
     *
     * @param integer $cap
     */
    public function setCap($cap)
    {
        $this->cap = $cap;
    }

    /**
     * Get cap
     *
     * @return integer 
     */
    public function getCap()
    {
        return $this->cap;
    }
}