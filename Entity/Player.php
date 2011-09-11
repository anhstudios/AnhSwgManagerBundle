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
 * @ORM\Table(name="player")
 */
class Player extends Intangible
{
    /**
     * @ORM\ManyToMany(targetEntity="StatusFlag")
     * @ORM\JoinTable(name="players_status_flags",
     *      joinColumns={@ORM\JoinColumn(name="player_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="status_flag_id", referencedColumnName="id")}
     *      )
     */
    private $statusFlags;
    
    /**
     * @ORM\ManyToMany(targetEntity="ProfileFlag")
     * @ORM\JoinTable(name="players_profile_flags",
     *      joinColumns={@ORM\JoinColumn(name="player_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="profile_flag_id", referencedColumnName="id")}
     *      )
     */
    private $profileFlags;
    
    /**
     * @ORM\Column(type="string", length="255")
     */
    private $professionTag;
    
    /**
     * @ORM\Column(type="date")
     */
    private $bornDate;
    
    /**
     * @ORM\Column(type="bigint")
     */
    private $totalPlaytime;
    
    /**
     * @ORM\Column(type="smallint")
     */
    private $csrTag;
    
    /**
     * @ORM\OneToMany(targetEntity="XpList", mappedBy="player")
     */
    private $experience;
    
    /**
     * @ORM\OneToMany(targetEntity="Waypoint", mappedBy="player")
     */
    private $waypoints;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $currentForce;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $maxForce;
    
    /**
     * @ORM\OneToMany(targetEntity="ForceSensativeQuestList", mappedBy="player")
     */
    private $forceSensativeQuests;
    
    /**
     * @ORM\OneToMany(targetEntity="QuestJournalList", mappedBy="player")
     */
    private $questJournal;
    
    /**
     * @ORM\OneToMany(targetEntity="AbilityList", mappedBy="player")
     */
    private $abilities;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $experimentationEnabled;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $craftingStage;
    
    /**
     * @ORM\Column(type="bigint")
     */
    private $nearestCraftingStation;
    
    /**
     * @ORM\OneToMany(targetEntity="DraftSchematicList", mappedBy="player")
     */
    private $draftSchematics;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $experimentationPoints;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $accomplishmentCounter;
    
    /**
     * @ORM\OneToMany(targetEntity="FriendList", mappedBy="player")
     */
    private $friends;
    
    /**
     * @ORM\OneToMany(targetEntity="IgnoreList", mappedBy="player")
     */
    private $ignoredPlayers;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $currentLanguage;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $currentStomach;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $maxStomach;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $currentDrink;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $maxDrink;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $jediState;
    public function __construct()
    {
        $this->statusFlags = new \Doctrine\Common\Collections\ArrayCollection();
        $this->profileFlags = new \Doctrine\Common\Collections\ArrayCollection();
        $this->experience = new \Doctrine\Common\Collections\ArrayCollection();
        $this->waypoints = new \Doctrine\Common\Collections\ArrayCollection();
        $this->forceSensativeQuests = new \Doctrine\Common\Collections\ArrayCollection();
        $this->questJournal = new \Doctrine\Common\Collections\ArrayCollection();
        $this->abilities = new \Doctrine\Common\Collections\ArrayCollection();
        $this->draftSchematics = new \Doctrine\Common\Collections\ArrayCollection();
        $this->friends = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ignoredPlayers = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set professionTag
     *
     * @param string $professionTag
     */
    public function setProfessionTag($professionTag)
    {
        $this->professionTag = $professionTag;
    }

    /**
     * Get professionTag
     *
     * @return string 
     */
    public function getProfessionTag()
    {
        return $this->professionTag;
    }

    /**
     * Set bornDate
     *
     * @param date $bornDate
     */
    public function setBornDate($bornDate)
    {
        $this->bornDate = $bornDate;
    }

    /**
     * Get bornDate
     *
     * @return date 
     */
    public function getBornDate()
    {
        return $this->bornDate;
    }

    /**
     * Set totalPlaytime
     *
     * @param bigint $totalPlaytime
     */
    public function setTotalPlaytime($totalPlaytime)
    {
        $this->totalPlaytime = $totalPlaytime;
    }

    /**
     * Get totalPlaytime
     *
     * @return bigint 
     */
    public function getTotalPlaytime()
    {
        return $this->totalPlaytime;
    }

    /**
     * Set csrTag
     *
     * @param smallint $csrTag
     */
    public function setCsrTag($csrTag)
    {
        $this->csrTag = $csrTag;
    }

    /**
     * Get csrTag
     *
     * @return smallint 
     */
    public function getCsrTag()
    {
        return $this->csrTag;
    }

    /**
     * Set currentForce
     *
     * @param integer $currentForce
     */
    public function setCurrentForce($currentForce)
    {
        $this->currentForce = $currentForce;
    }

    /**
     * Get currentForce
     *
     * @return integer 
     */
    public function getCurrentForce()
    {
        return $this->currentForce;
    }

    /**
     * Set maxForce
     *
     * @param integer $maxForce
     */
    public function setMaxForce($maxForce)
    {
        $this->maxForce = $maxForce;
    }

    /**
     * Get maxForce
     *
     * @return integer 
     */
    public function getMaxForce()
    {
        return $this->maxForce;
    }

    /**
     * Set experimentationEnabled
     *
     * @param boolean $experimentationEnabled
     */
    public function setExperimentationEnabled($experimentationEnabled)
    {
        $this->experimentationEnabled = $experimentationEnabled;
    }

    /**
     * Get experimentationEnabled
     *
     * @return boolean 
     */
    public function getExperimentationEnabled()
    {
        return $this->experimentationEnabled;
    }

    /**
     * Set craftingStage
     *
     * @param integer $craftingStage
     */
    public function setCraftingStage($craftingStage)
    {
        $this->craftingStage = $craftingStage;
    }

    /**
     * Get craftingStage
     *
     * @return integer 
     */
    public function getCraftingStage()
    {
        return $this->craftingStage;
    }

    /**
     * Set nearestCraftingStation
     *
     * @param bigint $nearestCraftingStation
     */
    public function setNearestCraftingStation($nearestCraftingStation)
    {
        $this->nearestCraftingStation = $nearestCraftingStation;
    }

    /**
     * Get nearestCraftingStation
     *
     * @return bigint 
     */
    public function getNearestCraftingStation()
    {
        return $this->nearestCraftingStation;
    }

    /**
     * Set experimentationPoints
     *
     * @param integer $experimentationPoints
     */
    public function setExperimentationPoints($experimentationPoints)
    {
        $this->experimentationPoints = $experimentationPoints;
    }

    /**
     * Get experimentationPoints
     *
     * @return integer 
     */
    public function getExperimentationPoints()
    {
        return $this->experimentationPoints;
    }

    /**
     * Set accomplishmentCounter
     *
     * @param integer $accomplishmentCounter
     */
    public function setAccomplishmentCounter($accomplishmentCounter)
    {
        $this->accomplishmentCounter = $accomplishmentCounter;
    }

    /**
     * Get accomplishmentCounter
     *
     * @return integer 
     */
    public function getAccomplishmentCounter()
    {
        return $this->accomplishmentCounter;
    }

    /**
     * Set currentLanguage
     *
     * @param integer $currentLanguage
     */
    public function setCurrentLanguage($currentLanguage)
    {
        $this->currentLanguage = $currentLanguage;
    }

    /**
     * Get currentLanguage
     *
     * @return integer 
     */
    public function getCurrentLanguage()
    {
        return $this->currentLanguage;
    }

    /**
     * Set currentStomach
     *
     * @param integer $currentStomach
     */
    public function setCurrentStomach($currentStomach)
    {
        $this->currentStomach = $currentStomach;
    }

    /**
     * Get currentStomach
     *
     * @return integer 
     */
    public function getCurrentStomach()
    {
        return $this->currentStomach;
    }

    /**
     * Set maxStomach
     *
     * @param integer $maxStomach
     */
    public function setMaxStomach($maxStomach)
    {
        $this->maxStomach = $maxStomach;
    }

    /**
     * Get maxStomach
     *
     * @return integer 
     */
    public function getMaxStomach()
    {
        return $this->maxStomach;
    }

    /**
     * Set currentDrink
     *
     * @param integer $currentDrink
     */
    public function setCurrentDrink($currentDrink)
    {
        $this->currentDrink = $currentDrink;
    }

    /**
     * Get currentDrink
     *
     * @return integer 
     */
    public function getCurrentDrink()
    {
        return $this->currentDrink;
    }

    /**
     * Set maxDrink
     *
     * @param integer $maxDrink
     */
    public function setMaxDrink($maxDrink)
    {
        $this->maxDrink = $maxDrink;
    }

    /**
     * Get maxDrink
     *
     * @return integer 
     */
    public function getMaxDrink()
    {
        return $this->maxDrink;
    }

    /**
     * Set jediState
     *
     * @param integer $jediState
     */
    public function setJediState($jediState)
    {
        $this->jediState = $jediState;
    }

    /**
     * Get jediState
     *
     * @return integer 
     */
    public function getJediState()
    {
        return $this->jediState;
    }
}