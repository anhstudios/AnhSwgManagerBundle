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
 * @ORM\InheritanceType("JOINED")
 * @ORM\Table(name="object")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"cell" = "Cell", "manufacture_schematic" = "ManufactureSchematic", 
 *  "mission" = "Mission", "player" = "Player", "waypoint" = "Waypoint", 
 *  "building" = "Building", "creature" = "Creature", "factory_crate" = "FactoryCrate",
 *  "installation" = "Installation", "resource_container" = "ResourceContainer",
 *  "ship" = "Ship", "weapon" = "Weapon", "group" = "Group", "guild" = "Guild",
 *  "intangible" = "Intangible", "tangible" = "Tangible"})
 */
class Object
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\generatedValue(strategy="NONE")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Scene", inversedBy="objects")
     * @ORM\JoinColumn(name="scene_id", referencedColumnName="id")
     */
    protected $scene;
    
    /**
     * @ORM\Column(type="string", length="255")
     */
    protected $shared_template_string;
    
    /**
     * @ORM\Column(type="float", name="x_position")
     */
    protected $xPosition;

    /**
     * @ORM\Column(type="float", name="y_position")
     */
    protected $yPosition;

    /**
     * @ORM\Column(type="float", name="z_position")
     */
    protected $zPosition;

    /**
     * @ORM\Column(type="float", name="x_orientation")
     */
    protected $xOrientation;

    /**
     * @ORM\Column(type="float", name="y_orientation")
     */
    protected $yOrientation;

    /**
     * @ORM\Column(type="float", name="z_orientation")
     */
    protected $zOrientation;

    /**
     * @ORM\Column(type="float", name="w_orientation")
     */
    protected $wOrientation;
    
    /**
     * @ORM\OneToMany(targetEntity="Object", mappedBy="parent")
     */
    protected $children;

    /**
     * @ORM\ManyToOne(targetEntity="Object", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    protected $parent;
    
    /**
     * @ORM\Column(type="float")
     */
    protected $complexity;

    /**
     * @ORM\Column(type="string", length="255", name="stf_name_file")
     */
    protected $stfNameFile;

    /**
     * @ORM\Column(type="string", length="255", name="stf_name_string")
     */
    protected $stfNameString;

    /**
     * @ORM\Column(type="string", length="255", name="custom_name")
     */
    protected $customName;

    /**
     * @ORM\Column(type="integer")
     */
    protected $volume;    
    
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
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set id
     *
     * @param bigint $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

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
     * Set shared_template_string
     *
     * @param string $sharedTemplateString
     */
    public function setSharedTemplateString($sharedTemplateString)
    {
        $this->shared_template_string = $sharedTemplateString;
    }

    /**
     * Get shared_template_string
     *
     * @return string 
     */
    public function getSharedTemplateString()
    {
        return $this->shared_template_string;
    }

    /**
     * Set xPosition
     *
     * @param float $xPosition
     */
    public function setXPosition($xPosition)
    {
        $this->xPosition = $xPosition;
    }

    /**
     * Get xPosition
     *
     * @return float 
     */
    public function getXPosition()
    {
        return $this->xPosition;
    }

    /**
     * Set yPosition
     *
     * @param float $yPosition
     */
    public function setYPosition($yPosition)
    {
        $this->yPosition = $yPosition;
    }

    /**
     * Get yPosition
     *
     * @return float 
     */
    public function getYPosition()
    {
        return $this->yPosition;
    }

    /**
     * Set zPosition
     *
     * @param float $zPosition
     */
    public function setZPosition($zPosition)
    {
        $this->zPosition = $zPosition;
    }

    /**
     * Get zPosition
     *
     * @return float 
     */
    public function getZPosition()
    {
        return $this->zPosition;
    }

    /**
     * Set xOrientation
     *
     * @param float $xOrientation
     */
    public function setXOrientation($xOrientation)
    {
        $this->xOrientation = $xOrientation;
    }

    /**
     * Get xOrientation
     *
     * @return float 
     */
    public function getXOrientation()
    {
        return $this->xOrientation;
    }

    /**
     * Set yOrientation
     *
     * @param float $yOrientation
     */
    public function setYOrientation($yOrientation)
    {
        $this->yOrientation = $yOrientation;
    }

    /**
     * Get yOrientation
     *
     * @return float 
     */
    public function getYOrientation()
    {
        return $this->yOrientation;
    }

    /**
     * Set zOrientation
     *
     * @param float $zOrientation
     */
    public function setZOrientation($zOrientation)
    {
        $this->zOrientation = $zOrientation;
    }

    /**
     * Get zOrientation
     *
     * @return float 
     */
    public function getZOrientation()
    {
        return $this->zOrientation;
    }

    /**
     * Set wOrientation
     *
     * @param float $wOrientation
     */
    public function setWOrientation($wOrientation)
    {
        $this->wOrientation = $wOrientation;
    }

    /**
     * Get wOrientation
     *
     * @return float 
     */
    public function getWOrientation()
    {
        return $this->wOrientation;
    }

    /**
     * Set complexity
     *
     * @param float $complexity
     */
    public function setComplexity($complexity)
    {
        $this->complexity = $complexity;
    }

    /**
     * Get complexity
     *
     * @return float 
     */
    public function getComplexity()
    {
        return $this->complexity;
    }

    /**
     * Set stfNameFile
     *
     * @param string $stfNameFile
     */
    public function setStfNameFile($stfNameFile)
    {
        $this->stfNameFile = $stfNameFile;
    }

    /**
     * Get stfNameFile
     *
     * @return string 
     */
    public function getStfNameFile()
    {
        return $this->stfNameFile;
    }

    /**
     * Set stfNameString
     *
     * @param string $stfNameString
     */
    public function setStfNameString($stfNameString)
    {
        $this->stfNameString = $stfNameString;
    }

    /**
     * Get stfNameString
     *
     * @return string 
     */
    public function getStfNameString()
    {
        return $this->stfNameString;
    }

    /**
     * Set customName
     *
     * @param string $customName
     */
    public function setCustomName($customName)
    {
        $this->customName = $customName;
    }

    /**
     * Get customName
     *
     * @return string 
     */
    public function getCustomName()
    {
        return $this->customName;
    }

    /**
     * Set volume
     *
     * @param integer $volume
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    /**
     * Get volume
     *
     * @return integer 
     */
    public function getVolume()
    {
        return $this->volume;
    }

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
     * Set scene
     *
     * @param Anh\SwgManagerBundle\Entity\Scene $scene
     */
    public function setScene(\Anh\SwgManagerBundle\Entity\Scene $scene)
    {
        $this->scene = $scene;
    }

    /**
     * Get scene
     *
     * @return Anh\SwgManagerBundle\Entity\Scene 
     */
    public function getScene()
    {
        return $this->scene;
    }

    /**
     * Add children
     *
     * @param Anh\SwgManagerBundle\Entity\Object $children
     */
    public function addChildren(\Anh\SwgManagerBundle\Entity\Object $children)
    {
        $this->children[] = $children;
    }

    /**
     * Get children
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param Anh\SwgManagerBundle\Entity\Object $parent
     */
    public function setParent(\Anh\SwgManagerBundle\Entity\Object $parent)
    {
        $this->parent = $parent;
    }

    /**
     * Get parent
     *
     * @return Anh\SwgManagerBundle\Entity\Object 
     */
    public function getParent()
    {
        return $this->parent;
    }
}