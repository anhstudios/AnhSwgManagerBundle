<?php
/**
 * Represents a Last Name for Name Generation
 *
 * Copyright (c) 2011 Kyle Craviotto <kyle@anhstudios.com>
 */

namespace Anh\SwgManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="namegen_lastname")
 */
class NamegenLastName
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=100)
     */
    protected $lastname;
    
    /**
     *  @ORM\Column(type="integer")
     */
    protected $species;   
    
     /**
     *  @ORM\Column(type="integer")
     */
    protected $gender;   
    

    /**
     * Set lastname
     *
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set species
     *
     * @param integer $species
     */
    public function setSpecies($species)
    {
        $this->species = $species;
    }

    /**
     * Get species
     *
     * @return integer 
     */
    public function getSpecies()
    {
        return $this->species;
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
}