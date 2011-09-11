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
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Scene")
     * @ORM\JoinColumn(name="scene_id", referencedColumnName="id")
     */
    private $scene;
    
    /**
     * @ORM\Column(type="string", length="255")
     */
    private $shared_template_string;
    
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
     * @ORM\OneToMany(targetEntity="Object", mappedBy="parent")
     */
    private $children;

    /**
     * @ORM\ManyToOne(targetEntity="Object", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $parent;
    
    /**
     * @ORM\Column(type="float")
     */
    private $complexity;

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
}