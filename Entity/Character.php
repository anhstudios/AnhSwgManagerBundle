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
     * @ORM\Column(type="bigint")
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

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
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
     * Set entity
     *
     * @param Anh\SwgManagerBundle\Entity\Entity $entity
     */
    public function setEntity(\Anh\SwgManagerBundle\Entity\Entity $entity)
    {
        $this->entity = $entity;
    }

    /**
     * Get entity
     *
     * @return Anh\SwgManagerBundle\Entity\Entity 
     */
    public function getEntity()
    {
        return $this->entity;
    }
}