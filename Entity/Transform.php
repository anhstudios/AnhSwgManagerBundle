<?php
/**
 * Represents a transform component
 *
 * Copyright (c) 2011 Kyle Craviotto <kyle@anhstudios.com>
 */

namespace Anh\SwgManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="transform")
 */
class Transform
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $location_id;
        
    /**
     *  @ORM\Column(type="integer")
     *  @ORM\JoinColumn(name="entity_id", referencedColumnName="id")
     */
    protected $entity_id;   
    
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
     *  @ORM\Column(type="float")
     */
    protected $oX;   
    /**
     *  @ORM\Column(type="float")
     */
    protected $oY; 
    /**
     *  @ORM\Column(type="float")
     */
    protected $oZ; 
    /**
     *  @ORM\Column(type="float")
     */
    protected $oW; 
    /**
     *  @ORM\Column(type="integer")
     */
    protected $planet_id;  
    

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
     * Set entity_id
     *
     * @param integer $entityId
     */
    public function setEntityId($entityId)
    {
        $this->entity_id = $entityId;
    }

    /**
     * Get entity_id
     *
     * @return integer 
     */
    public function getEntityId()
    {
        return $this->entity_id;
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
     * Set oX
     *
     * @param float $oX
     */
    public function setOX($oX)
    {
        $this->oX = $oX;
    }

    /**
     * Get oX
     *
     * @return float 
     */
    public function getOX()
    {
        return $this->oX;
    }

    /**
     * Set oY
     *
     * @param float $oY
     */
    public function setOY($oY)
    {
        $this->oY = $oY;
    }

    /**
     * Get oY
     *
     * @return float 
     */
    public function getOY()
    {
        return $this->oY;
    }

    /**
     * Set oZ
     *
     * @param float $oZ
     */
    public function setOZ($oZ)
    {
        $this->oZ = $oZ;
    }

    /**
     * Get oZ
     *
     * @return float 
     */
    public function getOZ()
    {
        return $this->oZ;
    }

    /**
     * Set oW
     *
     * @param float $oW
     */
    public function setOW($oW)
    {
        $this->oW = $oW;
    }

    /**
     * Get oW
     *
     * @return float 
     */
    public function getOW()
    {
        return $this->oW;
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
}