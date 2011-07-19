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
 * @ORM\Table(name="appearance")
 */
class Appearance
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $id;

    // Appearance columns here.
    /**
     * @ORM\Column(type="string", length="255")
     */
    protected $baseModel;

    /**
     * @ORM\Column(type="float")
     */
    protected $scale;

    /**
     * @ORM\OneToOne(targetEntity="Entity")
     * @ORM\JoinColumn(name="entity_id", referencedColumnName="id")
     */
    protected $entity;
}
