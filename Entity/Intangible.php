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
    private $stfDetailFile;

    /**
     * @ORM\Column(type="string", length="255", name="stf_detail_string")
     */
    private $stfDetailString;
}
