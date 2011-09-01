<?php
/**
 * Represents a user that participates in one or more managed Galaxies.
 *
 * Copyright (c) 2011 Eric Barr <eb@anhstudios.com>
 */

namespace Anh\SwgManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="player")
 */
class Player
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\generatedValue(strategy="NONE")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $maxCharacters;

    /**
     * @ORM\ManyToMany(targetEntity="PlayerCharacter")
     * @ORM\JoinTable(name="players_player_characters",
     *      joinColumns={@ORM\JoinColumn(name="player_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="player_character_id", referencedColumnName="object_id", unique=true)}
     *      )
     */
    protected $playerCharacters;
    
    /**
     *  @ORM\OneToMany(targetEntity="PlayerSession", mappedBy="player")
     *
     */
    protected $sessions;

    public function __construct()
    {
        
    }

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set referenceId
     *
     * @param integer $referenceId
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
    }

    /**
     * Get referenceId
     *
     * @return integer 
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * Set maxCharacters
     *
     * @param integer $maxCharacters
     */
    public function setMaxCharacters($maxCharacters)
    {
        $this->maxCharacters = $maxCharacters;
    }

    /**
     * Get maxCharacters
     *
     * @return integer 
     */
    public function getMaxCharacters()
    {
        return $this->maxCharacters;
    }

    /**
     * Add sessions
     *
     * @param Anh\SwgManagerBundle\Entity\PlayerSession $sessions
     */
    public function addSessions(\Anh\SwgManagerBundle\Entity\PlayerSession $sessions)
    {
        $this->sessions[] = $sessions;
    }

    /**
     * Get sessions
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSessions()
    {
        return $this->sessions;
    }

    /**
     * Add playerCharacters
     *
     * @param Anh\SwgManagerBundle\Entity\PlayerCharacter $playerCharacters
     */
    public function addPlayerCharacters(\Anh\SwgManagerBundle\Entity\PlayerCharacter $playerCharacters)
    {
        $this->playerCharacters[] = $playerCharacters;
    }

    /**
     * Get playerCharacters
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPlayerCharacters()
    {
        return $this->playerCharacters;
    }

    /**
     * Set id
     *
     * @param bigint $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}