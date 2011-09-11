<?php
/**
 * Represents a cluster being managed by the server directory.
 *
 * Copyright (c) 2011 Eric Barr <eb@anhstudios.com>
 */

namespace Anh\SwgManagerBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="scene")
 */
class Scene
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
    protected $name;

    /**
     * @ORM\Column(type="string", length="255")
     */
    protected $label;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="string", length="255")
     */
    protected $terrain;

    /**
     * @ORM\OneToMany(targetEntity="Object", mappedBy="scene")
     */
    protected $objects;

    public function __construct()
    {
        $this->entities = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set terrain
     *
     * @param string $terrain
     */
    public function setTerrain($terrain)
    {
        $this->terrain = $terrain;
    }

    /**
     * Get terrain
     *
     * @return string 
     */
    public function getTerrain()
    {
        return $this->terrain;
    }

    /**
     * Add sceneObjects
     *
     * @param Anh\SwgManagerBundle\Entity\SceneObject $sceneObjects
     */
    public function addSceneObjects(\Anh\SwgManagerBundle\Entity\SceneObject $sceneObjects)
    {
        $this->sceneObjects[] = $sceneObjects;
    }

    /**
     * Get sceneObjects
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSceneObjects()
    {
        return $this->sceneObjects;
    }

    /**
     * Add objects
     *
     * @param Anh\SwgManagerBundle\Entity\Object $objects
     */
    public function addObjects(\Anh\SwgManagerBundle\Entity\Object $objects)
    {
        $this->objects[] = $objects;
    }

    /**
     * Get objects
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getObjects()
    {
        return $this->objects;
    }
}