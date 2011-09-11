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
 * @ORM\Table(name="quest_journal_list")
 */
class QuestJournalList
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="questJournal")
     * @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     */
    private $player;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $quest_crc;
    
    /**
     * @ORM\ManyToOne(targetEntity="Player")
     * @ORM\JoinColumn(name="quest_owner_id", referencedColumnName="id")
     */
    protected $quest_owner;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $active_step_bitmask;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $completed_step_bitmask;
    
    /**
     * @ORM\Column(type="boolean")
     */
    protected $completed;

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
     * Set quest_crc
     *
     * @param integer $questCrc
     */
    public function setQuestCrc($questCrc)
    {
        $this->quest_crc = $questCrc;
    }

    /**
     * Get quest_crc
     *
     * @return integer 
     */
    public function getQuestCrc()
    {
        return $this->quest_crc;
    }

    /**
     * Set active_step_bitmask
     *
     * @param integer $activeStepBitmask
     */
    public function setActiveStepBitmask($activeStepBitmask)
    {
        $this->active_step_bitmask = $activeStepBitmask;
    }

    /**
     * Get active_step_bitmask
     *
     * @return integer 
     */
    public function getActiveStepBitmask()
    {
        return $this->active_step_bitmask;
    }

    /**
     * Set completed_step_bitmask
     *
     * @param integer $completedStepBitmask
     */
    public function setCompletedStepBitmask($completedStepBitmask)
    {
        $this->completed_step_bitmask = $completedStepBitmask;
    }

    /**
     * Get completed_step_bitmask
     *
     * @return integer 
     */
    public function getCompletedStepBitmask()
    {
        return $this->completed_step_bitmask;
    }

    /**
     * Set completed
     *
     * @param boolean $completed
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;
    }

    /**
     * Get completed
     *
     * @return boolean 
     */
    public function getCompleted()
    {
        return $this->completed;
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
     * Set quest_owner
     *
     * @param Anh\SwgManagerBundle\Entity\Player $questOwner
     */
    public function setQuestOwner(\Anh\SwgManagerBundle\Entity\Player $questOwner)
    {
        $this->quest_owner = $questOwner;
    }

    /**
     * Get quest_owner
     *
     * @return Anh\SwgManagerBundle\Entity\Player 
     */
    public function getQuestOwner()
    {
        return $this->quest_owner;
    }
}