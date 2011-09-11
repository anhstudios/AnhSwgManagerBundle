<?php

namespace Anh\SwgManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anh\SwgManagerBundle\Entity\ForceSensativeQuestList
 */
class ForceSensativeQuestList
{
    /**
     * @var bigint $id
     */
    private $id;

    /**
     * @var integer $quest_mask
     */
    private $quest_mask;

    /**
     * @var boolean $completed
     */
    private $completed;

    /**
     * @var Anh\SwgManagerBundle\Entity\Player
     */
    private $player;


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
     * Set quest_mask
     *
     * @param integer $questMask
     */
    public function setQuestMask($questMask)
    {
        $this->quest_mask = $questMask;
    }

    /**
     * Get quest_mask
     *
     * @return integer 
     */
    public function getQuestMask()
    {
        return $this->quest_mask;
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
}