<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * An association between a Book and an User
 *
 * @ApiResource
 * @ORM\Table(name="book_user", indexes={@ORM\Index(name="book_id", columns={"book_id"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class BookUser
{
    /**
     * @var int The id of this Book / User association
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime The time at which the user started reading the book
     *
     * @ORM\Column(name="date_start", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateDepart = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime The time at which the user last read the book
     *
     * @ORM\Column(name="date_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateUpdate = 'CURRENT_TIMESTAMP';

    /**
     * @var int The page number of the book at which the user stopped reading
     *
     * @ORM\Column(name="page", type="integer", nullable=false)
     */
    public $page = '0';

    /**
     * @var string|null The configuration of the user for the reading of the book (i.e the font size, the text color, etc.)
     *
     * @ORM\Column(name="config", type="text", length=65535, nullable=true)
     */
    public $config;

    /**
     * @var \User The user concerned by this Book / User association
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    public $user;

    /**
     * @var \Book The book concerned by this Book / User association
     *
     * @ORM\ManyToOne(targetEntity="Book")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="book_id", referencedColumnName="id")
     * })
     */
    public $book;

    public function getId(): ?int
    {
        return $this->id;
    }
}
