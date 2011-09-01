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
 * @ORM\Table(name="appearance")
 */
class Appearance
{
    /**
     * @ORM\Id
      * @ORM\generatedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Object")
     * @ORM\JoinColumn(name="object_id", referencedColumnName="id")
     */
    protected $object;

    /**
     * @ORM\Column(type="float")
     */
    protected $scale;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $gender;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $species;
    
     /**
     * @ORM\Column(type="text")
     */
    protected $customization_data;
          
    /**
     * Set scale
     *
     * @param float $scale
     */
    public function setScale($scale)
    {
        $this->scale = $scale;
    }

    /**
     * Get scale
     *
     * @return float 
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * Get gender
     *
     * @return integer 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set species
     *
     * @param string $species
     */
    public function setSpecies($species)
    {
        $this->species = $species;
    }

    /**
     * Get species
     *
     * @return string 
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Set customization_data
     *
     * @param text $customizationData
     */
    public function setCustomizationData($customizationData)
    {
        $this->customization_data = $customizationData;
    }

    /**
     * Get customization_data
     *
     * @return text 
     */
    public function getCustomizationData()
    {
        return $this->customization_data;
    }

    /**
     * Set sceneObject
     *
     * @param Anh\SwgManagerBundle\Entity\SceneObject $sceneObject
     */
    public function setSceneObject(\Anh\SwgManagerBundle\Entity\SceneObject $sceneObject)
    {
        $this->sceneObject = $sceneObject;
    }

    /**
     * Get sceneObject
     *
     * @return Anh\SwgManagerBundle\Entity\SceneObject 
     */
    public function getSceneObject()
    {
        return $this->sceneObject;
    }

    /**
     * Set object
     *
     * @param Anh\SwgManagerBundle\Entity\Object $object
     */
    public function setObject(\Anh\SwgManagerBundle\Entity\Object $object)
    {
        $this->object = $object;
    }

    /**
     * Get object
     *
     * @return Anh\SwgManagerBundle\Entity\Object 
     */
    public function getObject()
    {
        return $this->object;
    }
}