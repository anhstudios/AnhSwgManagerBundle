<?php
/**
 * Represents a starting location
 *
 * Copyright (c) 2011 Kyle Craviotto <kyle@anhstudios.com>
 */

namespace Anh\SwgManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="starting_location")
 */
class StartingLocation
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $location_id;
    
    /**
     *  @ORM\Column(type="string", length=100)
     */
    protected $location;   
    
    /**
     * @ORM\ManyToOne(targetEntity="Scene")
     * @ORM\JoinColumn(name="scene_id", referencedColumnName="id")
     */
    protected $scene;
    
    /**
     *  @ORM\Column(type="float")
     */
    protected $x;

    /**
     *  @ORM\Column(type="float")
     */
    protected $y;

    /**
     *  @ORM\Column(type="float")
     */
    protected $z;

    /**
     *  @ORM\Column(type="string", length=100)
     */
    protected $description;

    /**
     *  @ORM\Column(type="integer")
     */
    protected $radius;

    /**
     *  @ORM\Column(type="integer")
     */
    protected $heading;      
    

    /**
     * Get location_id
     *
     * @return integer 
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * Set location
     *
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set planet_id
     *
     * @param integer $planetId
     */
    public function setPlanetId($planetId)
    {
        $this->planet_id = $planetId;
    }

    /**
     * Get planet_id
     *
     * @return integer 
     */
    public function getPlanetId()
    {
        return $this->planet_id;
    }

    /**
     * Set x
     *
     * @param float $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * Get x
     *
     * @return float 
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set y
     *
     * @param float $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * Get y
     *
     * @return float 
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set z
     *
     * @param float $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }

    /**
     * Get z
     *
     * @return float 
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * Set radius
     *
     * @param integer $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * Get radius
     *
     * @return integer 
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * Set heading
     *
     * @param integer $heading
     */
    public function setHeading($heading)
    {
        $this->heading = $heading;
    }

    /**
     * Get heading
     *
     * @return integer 
     */
    public function getHeading()
    {
        return $this->heading;
    }

    /**
     * Set scene
     *
     * @param Anh\SwgManagerBundle\Entity\Scene $scene
     */
    public function setScene(\Anh\SwgManagerBundle\Entity\Scene $scene)
    {
        $this->scene = $scene;
    }

    /**
     * Get scene
     *
     * @return Anh\SwgManagerBundle\Entity\Scene 
     */
    public function getScene()
    {
        return $this->scene;
    }
}