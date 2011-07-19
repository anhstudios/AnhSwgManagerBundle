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
 * @ORM\Table(name="scene")
 */
class Scene
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length="255")
     */
    protected $name;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="string", length="255")
     */
    protected $terrain;

    /**
     * @ORM\ManyToMany(targetEntity="Entity")
     * @ORM\JoinTable(name="scenes_entities",
     *      joinColumns={@ORM\JoinColumn(name="scene_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="entity_id", referencedColumnName="id", unique=true)}
     *      )
     */
    protected $entities;
}