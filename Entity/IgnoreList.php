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
 * @ORM\Table(name="ignore_list")
 */
class IgnoreList
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="friends")
     * @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     */
    private $player;
    
    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="ignoredPlayers")
     * @ORM\JoinColumn(name="ignored_player_id", referencedColumnName="id")
     */
    private $ignoredPlayer;

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
     * Set player
     *
     * @param Anh\SwgManagerBundle\Entity\Player $player
     */
    public function setPlayer(\Anh\SwgManagerBundle\Entity\Player $player)
    {
        $this->player = $player;
    }

    /**
     * Get player
     *
     * @return Anh\SwgManagerBundle\Entity\Player 
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set ignoredPlayer
     *
     * @param Anh\SwgManagerBundle\Entity\Player $ignoredPlayer
     */
    public function setIgnoredPlayer(\Anh\SwgManagerBundle\Entity\Player $ignoredPlayer)
    {
        $this->ignoredPlayer = $ignoredPlayer;
    }

    /**
     * Get ignoredPlayer
     *
     * @return Anh\SwgManagerBundle\Entity\Player 
     */
    public function getIgnoredPlayer()
    {
        return $this->ignoredPlayer;
    }
}