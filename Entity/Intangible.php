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
 * @ORM\Table(name="intangible")
 */
class Intangible extends Object
{
    /**
     * @ORM\Column(type="string", length="255", name="stf_detail_file")
     */
    protected $stfDetailFile;

    /**
     * @ORM\Column(type="string", length="255", name="stf_detail_string")
     */
    protected $stfDetailString;

    /**
     * Set stfDetailFile
     *
     * @param string $stfDetailFile
     */
    public function setStfDetailFile($stfDetailFile)
    {
        $this->stfDetailFile = $stfDetailFile;
    }

    /**
     * Get stfDetailFile
     *
     * @return string 
     */
    public function getStfDetailFile()
    {
        return $this->stfDetailFile;
    }

    /**
     * Set stfDetailString
     *
     * @param string $stfDetailString
     */
    public function setStfDetailString($stfDetailString)
    {
        $this->stfDetailString = $stfDetailString;
    }

    /**
     * Get stfDetailString
     *
     * @return string 
     */
    public function getStfDetailString()
    {
        return $this->stfDetailString;
    }
}