<?php
/**
 * Represents a cluster being managed by the server directory.
 *
 * Copyright (c) 2011 Eric Barr <eb@anhstudios.com>
 */

namespace Anh\SwgManagerBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="scene_object")
 */
class SceneObject
{
    /**
     * @ORM\Id
      * @ORM\generatedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Object")
     * @ORM\JoinColumn(name="object_id", referencedColumnName="id")
     */
    protected $object;

    /**
     * @ORM\ManyToOne(targetEntity="Scene")
     * @ORM\JoinColumn(name="scene_id", referencedColumnName="id")
     */
    private $scene;

    /**
     * @ORM\OneToMany(targetEntity="SceneObject", mappedBy="parent")
     */
    private $children;

    /**
     * @ORM\ManyToOne(targetEntity="SceneObject", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="object_id")
     */
    private $parent;

    /**
     * @ORM\Column(type="string", length="255")
     */
    private $template;

    /**
     * @ORM\Column(type="string", length="255", name="stf_name_file")
     */
    private $stfNameFile;

    /**
     * @ORM\Column(type="string", length="255", name="stf_name_string")
     */
    private $stfNameString;

    /**
     * @ORM\Column(type="string", length="255", name="custom_name")
     */
    private $customName;

    /**
     * @ORM\Column(type="integer")
     */
    private $volume;

    /**
     * @ORM\Column(type="float", name="x_position")
     */
    private $xPosition;

    /**
     * @ORM\Column(type="float", name="y_position")
     */
    private $yPosition;

    /**
     * @ORM\Column(type="float", name="z_position")
     */
    private $zPosition;

    /**
     * @ORM\Column(type="float", name="x_orientation")
     */
    private $xOrientation;

    /**
     * @ORM\Column(type="float", name="y_orientation")
     */
    private $yOrientation;

    /**
     * @ORM\Column(type="float", name="z_orientation")
     */
    private $zOrientation;

    /**
     * @ORM\Column(type="float", name="w_orientation")
     */
    private $wOrientation;

    /**
     * Set template
     *
     * @param string $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    }

    /**
     * Get template
     *
     * @return string 
     */
    public function getTemplate()
    {
        return $this->template;
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
     * Set sceneObject
     *
     * @param Anh\SwgManagerBundle\Entity\SceneObject $sceneObject
     */
    public function setSceneObject(\Anh\SwgManagerBundle\Entity\SceneObject $sceneObject)
    {
        $this->sceneObject = $sceneObject;
    }

    /**
     * Get sceneObject
     *
     * @return Anh\SwgManagerBundle\Entity\SceneObject 
     */
    public function getSceneObject()
    {
        return $this->sceneObject;
    }
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @param Anh\SwgManagerBundle\Entity\SceneData $children
     */
    public function addChildren(\Anh\SwgManagerBundle\Entity\SceneData $children)
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
     * @param Anh\SwgManagerBundle\Entity\SceneData $parent
     */
    public function setParent(\Anh\SwgManagerBundle\Entity\SceneData $parent)
    {
        $this->parent = $parent;
    }

    /**
     * Get parent
     *
     * @return Anh\SwgManagerBundle\Entity\SceneData 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
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