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
 * @ORM\Table(name="draft_schematic_list")
 */
class DraftSchematicList
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="draftSchematics")
     * @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     */
    private $player;
    
    /**
     * @ORM\Column(type="string", length="255")
     */
    private $schematic;

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
     * Set schematic
     *
     * @param string $schematic
     */
    public function setSchematic($schematic)
    {
        $this->schematic = $schematic;
    }

    /**
     * Get schematic
     *
     * @return string 
     */
    public function getSchematic()
    {
        return $this->schematic;
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
}