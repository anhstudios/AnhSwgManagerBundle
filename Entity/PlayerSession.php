<?php
/**
 * Represents a player session in the Galaxy
 *
 * Copyright (c) 2011 Kyle Craviotto <kyle@anhstudios.com>
 */

namespace Anh\SwgManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="player_session")
 */
class PlayerSession
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *  @ORM\ManyToOne(targetEntity="Player", inversedBy="sessions")
     *  @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     *  @ORM\Column(type="integer")
     *
     */
    protected $player;
    
    /**
     *  @ORM\Column(type="string", length=100)
     */
    protected $session_key;

    /**
     * Get id
     *
     * @return bigint 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set session_key
     *
     * @param string $sessionKey
     */
    public function setSessionKey($sessionKey)
    {
        $this->session_key = $sessionKey;
    }

    /**
     * Get session_key
     *
     * @return string 
     */
    public function getSessionKey()
    {
        return $this->session_key;
    }

    /**
     * Set player
     *
     * @param integer $player
     */
    public function setPlayer($player)
    {
        $this->player = $player;
    }

    /**
     * Get player
     *
     * @return integer 
     */
    public function getPlayer()
    {
        return $this->player;
    }
}