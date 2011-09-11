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
 * @ORM\Table(name="xp_list")
 */
class XpList
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="experience")
     * @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     */
    protected $player;
    
    /**
     * @ORM\ManyToOne(targetEntity="XpType")
     * @ORM\JoinColumn(name="xp_type_id", referencedColumnName="id")
     */
    protected $xp_type;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $value;

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
     * Set value
     *
     * @param integer $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Get value
     *
     * @return integer 
     */
    public function getValue()
    {
        return $this->value;
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
     * Set xp_type
     *
     * @param Anh\SwgManagerBundle\Entity\XpType $xpType
     */
    public function setXpType(\Anh\SwgManagerBundle\Entity\XpType $xpType)
    {
        $this->xp_type = $xpType;
    }

    /**
     * Get xp_type
     *
     * @return Anh\SwgManagerBundle\Entity\XpType 
     */
    public function getXpType()
    {
        return $this->xp_type;
    }
}