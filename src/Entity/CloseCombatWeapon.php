<?php

namespace App\Entity;

use App\Repository\CloseCombatWeaponRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CloseCombatWeaponRepository::class)
 */
class CloseCombatWeapon
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
     * @ORM\Column(type="integer", nullable=true)
     */
    private $price;

    /**
     * @ORM\Column(type="integer", options={"default": 1})
     */
    private $hands;

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $onlyShield;

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

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(?int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getHands(): ?int
    {
        return $this->hands;
    }

    public function setHands(int $hands): self
    {
        $this->hands = $hands;

        return $this;
    }

    public function getOnlyShield(): ?bool
    {
        return $this->onlyShield;
    }

    public function setOnlyShield(bool $onlyShield): self
    {
        $this->onlyShield = $onlyShield;

        return $this;
    }
}