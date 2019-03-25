<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuoteRepository")
 */
class Quote
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $source;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="quotes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $author;


    public function getId(): ? int
    {
        return $this->id;
    }

    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    public function getContent(): ? string
    {
        return $this->content;
    }


    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getSource(): ? string
    {
        return $this->source;
    }

    public function setSource(? string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getCreatedAt(): ? \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUser(): ? User
    {
        return $this->user;
    }

    public function setUser(? User $user): self
    {
        $this->user = $user;

        return $this;
    }

    

    public function getAuthor(): ? string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }


    public function __toString()
    {
        return $this->getAuthor();
    }
}

