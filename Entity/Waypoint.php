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
 * @ORM\Table(name="waypoint")
 */
class Waypoint extends Object
{    
    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="waypoints")
     * @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     */
    protected $player;
    
    /**
     * @ORM\Column(type="float")
     */
    protected $xPosition;
    
    /**
     * @ORM\Column(type="float")
     */
    protected $yPosition;
    
    /**
     * @ORM\Column(type="float")
     */
    protected $zPosition;
    
    /**
     * @ORM\Column(type="boolean")
     */
    protected $isActive;
    
    /**
     * @ORM\ManyToOne(targetEntity="Scene")
     * @ORM\JoinColumn(name="scene_id", referencedColumnName="id")
     */
    protected $scene;
    
    /**
     * @ORM\Column(type="string", length="255")
     */
    protected $name;
    
    /**
     * @ORM\Column(type="smallint")
     */
    protected $color;
    
    /**
     * Set xPosition
     *
     * @param float $xPosition
     */
    public function setXPosition($xPosition)
    {
        $this->xPosition = $xPosition;
    }

    /**
     * Get xPosition
     *
     * @return float 
     */
    public function getXPosition()
    {
        return $this->xPosition;
    }

    /**
     * Set yPosition
     *
     * @param float $yPosition
     */
    public function setYPosition($yPosition)
    {
        $this->yPosition = $yPosition;
    }

    /**
     * Get yPosition
     *
     * @return float 
     */
    public function getYPosition()
    {
        return $this->yPosition;
    }

    /**
     * Set zPosition
     *
     * @param float $zPosition
     */
    public function setZPosition($zPosition)
    {
        $this->zPosition = $zPosition;
    }

    /**
     * Get zPosition
     *
     * @return float 
     */
    public function getZPosition()
    {
        return $this->zPosition;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
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
     * Set color
     *
     * @param smallint $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * Get color
     *
     * @return smallint 
     */
    public function getColor()
    {
        return $this->color;
    }
}