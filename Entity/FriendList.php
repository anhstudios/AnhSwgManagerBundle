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
 * @ORM\Table(name="friend_list")
 */
class FriendList
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
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="ignored")
     * @ORM\JoinColumn(name="friend_id", referencedColumnName="id")
     */
    private $friend;

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
     * Set friend
     *
     * @param Anh\SwgManagerBundle\Entity\Player $friend
     */
    public function setFriend(\Anh\SwgManagerBundle\Entity\Player $friend)
    {
        $this->friend = $friend;
    }

    /**
     * Get friend
     *
     * @return Anh\SwgManagerBundle\Entity\Player 
     */
    public function getFriend()
    {
        return $this->friend;
    }
}