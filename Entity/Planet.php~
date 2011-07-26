<?php
/**
 * Represents a planet
 *
 * Copyright (c) 2011 Kyle Craviotto <kyle@anhstudios.com>
 */

namespace Anh\SwgManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="planet")
 */
class Planet
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $planet_id;
    
    /**
     *  @ORM\Column(type="string", length=100)
     */
    protected $name;   
    
     /**
     *  @ORM\Column(type="string", length=100)
     */
    protected $terrainMap;   
    

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
     * Set terrainMap
     *
     * @param string $terrainMap
     */
    public function setTerrainMap($terrainMap)
    {
        $this->terrainMap = $terrainMap;
    }

    /**
     * Get terrainMap
     *
     * @return string 
     */
    public function getTerrainMap()
    {
        return $this->terrainMap;
    }
}