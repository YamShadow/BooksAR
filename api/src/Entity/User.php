<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * User
 *
 * @ApiResource
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var int The id of this user
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string The name of this user
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    public $name;

    /**
     * @var string The security token of this user
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false)
     */
    public $token;

    public function getId(): ?int
    {
        return $this->id;
    }
}
