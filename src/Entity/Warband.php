<?php

namespace App\Entity;

use App\Repository\WarbandRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WarbandRepository::class)
 */
class Warband
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $maxSize;

    /**
     * @ORM\Column(type="integer")
     */
    private $routThreshold;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"default": 0})
     */
    private $treasure;

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $public;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getMaxSize(): ?int
    {
        return $this->maxSize;
    }

    public function setMaxSize(int $maxSize): self
    {
        $this->maxSize = $maxSize;

        return $this;
    }

    public function getRoutThreshold(): ?int
    {
        return $this->routThreshold;
    }

    public function setRoutThreshold(int $routThreshold): self
    {
        $this->routThreshold = $routThreshold;

        return $this;
    }

    public function getTreasure(): ?int
    {
        return $this->treasure;
    }

    public function setTreasure(?int $treasure): self
    {
        $this->treasure = $treasure;

        return $this;
    }

    public function getPublic(): ?bool
    {
        return $this->public;
    }

    public function setPublic(bool $public): self
    {
        $this->public = $public;

        return $this;
    }
}