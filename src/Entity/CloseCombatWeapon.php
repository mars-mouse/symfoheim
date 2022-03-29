<?php

namespace App\Entity;

use App\Repository\CloseCombatWeaponRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\ManyToOne(targetEntity=Rarity::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $rarity;

    /**
     * @ORM\ManyToMany(targetEntity=Effect::class)
     */
    private $effects;

    public function __construct()
    {
        $this->effects = new ArrayCollection();
    }

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

    public function getRarity(): ?Rarity
    {
        return $this->rarity;
    }

    public function setRarity(?Rarity $rarity): self
    {
        $this->rarity = $rarity;

        return $this;
    }

    /**
     * @return Collection<int, Effect>
     */
    public function getEffects(): Collection
    {
        return $this->effects;
    }

    public function addEffect(Effect $effect): self
    {
        if (!$this->effects->contains($effect)) {
            $this->effects[] = $effect;
        }

        return $this;
    }

    public function removeEffect(Effect $effect): self
    {
        $this->effects->removeElement($effect);

        return $this;
    }
}