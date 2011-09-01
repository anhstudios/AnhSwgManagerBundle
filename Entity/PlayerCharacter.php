<?php

namespace Anh\SwgManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="player_character")
 *
 * Normally we don't use the plural form however in this case "character" is a reserved mysql keyword.
 */
class PlayerCharacter
{
    /**
     * @ORM\Id
      * @ORM\generatedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Object")
     * @ORM\JoinColumn(name="object_id", referencedColumnName="id")
     */
    protected $object;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updatedAt;

    /**
     * @ORM\Column(type="datetime", nullable="true")
     */
    protected $deletedAt;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $jediState;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $birthDate;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $archived;

    /**
     * @ORM\OneToOne(targetEntity="Player")
     * @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     */
    protected $player;

    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Get createdAt
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Get updatedAt
     *
     * @return datetime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set deletedAt
     *
     * @param datetime $deletedAt
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;
    }

    /**
     * Get deletedAt
     *
     * @return datetime 
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
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

    /**
     * Set birthDate
     *
     * @param datetime $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * Get birthDate
     *
     * @return datetime 
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set scene object
     *
     * @param \Anh\SwgManagerBundle\Entity\SceneObject $sceneObject
     */
    public function setEntity(\Anh\SwgManagerBundle\Entity\SceneObject $sceneObject)
    {
        $this->sceneObject = $sceneObject;
    }

    /**
     * Get scene object
     *
     * @return Anh\SwgManagerBundle\Entity\SceneObject
     */
    public function getSceneObject()
    {
        return $this->sceneObject;
    }

    /**
     * Set archived
     *
     * @param integer $archived
     */
    public function setArchived($archived)
    {
        $this->archived = $archived;
    }

    /**
     * Get archived
     *
     * @return integer 
     */
    public function getArchived()
    {
        return $this->archived;
    }

    /**
     * Set sceneObject
     *
     * @param Anh\SwgManagerBundle\Entity\SceneObject $sceneObject
     */
    public function setSceneObject(\Anh\SwgManagerBundle\Entity\SceneObject $sceneObject)
    {
        $this->sceneObject = $sceneObject;
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
     * Set object
     *
     * @param Anh\SwgManagerBundle\Entity\Object $object
     */
    public function setObject(\Anh\SwgManagerBundle\Entity\Object $object)
    {
        $this->object = $object;
    }

    /**
     * Get object
     *
     * @return Anh\SwgManagerBundle\Entity\Object 
     */
    public function getObject()
    {
        return $this->object;
    }
}