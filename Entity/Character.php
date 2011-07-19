<?php

namespace Anh\SwgManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="characters")
 *
 * Normally we don't use the plural form however in this case "character" is a reserved mysql keyword.
 */
class Character
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updatedAt;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $deletedAt;

    /**
     * @ORM\Column(type="string", length="100")
     */
    protected $firstName;

    /**
     * @ORM\Column(type="string", length="100")
     */
    protected $lastName;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $jediState;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $birthDate;

    /**
     * @ORM\OneToOne(targetEntity="Entity")
     * @ORM\JoinColumn(name="entity_id", referencedColumnName="id")
     */
    protected $entity;
}
