<?php
// api/src/Entity/User.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * An user.
 * @ApiResource
 * @ORM\Entity
 */
class User
{
    /**
     * @var int The id of this user.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string The name of this user.
     *
     * @ORM\Column
     */
    public $name;

    /**
     * @var string The token for this user.
     *
     * @ORM\Column
     */
    public $token;

    public function getId(): ?int
    {
        return $this->id;
    }
}