<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Book
 *
 * @ApiResource
 * @ORM\Table(name="book")
 * @ORM\Entity
 */
class Book
{
    /**
     * @var int The id of this book
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string The title of this book
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    public $title;

    /**
     * @var string A description of this book
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=false)
     */
    public $description;

    /**
     * @var string The author of this book
     *
     * @ORM\Column(name="author", type="string", length=255, nullable=false)
     */
    public $author;

    /**
     * @var string The number of pages of this book
     *
     * @ORM\Column(name="pages", type="text", length=0, nullable=false)
     */
    public $pages;

    public function getId(): ?int
    {
        return $this->id;
    }
}
