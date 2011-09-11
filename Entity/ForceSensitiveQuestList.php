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
 * @ORM\Table(name="force_sensative_quest_list")
 */
class ForceSensativeQuestList
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="forceSensativeQuests")
     * @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     */
    private $player;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $quest_mask;
    
    /**
     * @ORM\Column(type="boolean")
     */
    protected $completed;
}
