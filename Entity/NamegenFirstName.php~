<?php
/**
 * Represents a First Name for Name Generation
 *
 * Copyright (c) 2011 Kyle Craviotto <kyle@anhstudios.com>
 */

namespace Anh\SwgManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="namegen_firstname")
 */
class NamegenFirstName
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=100)
     */
    protected $firstname;
    
    /**
     *  @ORM\Column(type="integer")
     */
    protected $species;   
    
     /**
     *  @ORM\Column(type="integer")
     */
    protected $gender;   
    

    /**
     * Set firstname
     *
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
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