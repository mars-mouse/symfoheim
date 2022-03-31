<?php

namespace App\Entity;

use App\Repository\SpellRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SpellRepository::class)
 */
class Spell
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
    private $distance;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $radius;

    /**
     * @ORM\Column(type="boolean", options={"default": true})
     */
    private $usesLineOfSight;

    /**
     * @ORM\Column(type="integer")
     */
    private $difficulty;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $augmentDifficulty;

    /**
     * @ORM\ManyToOne(targetEntity=MagicSchool::class, inversedBy="spells")
     * @ORM\JoinColumn(nullable=false)
     */
    private $magicSchool;

    /**
     * @ORM\ManyToMany(targetEntity=Effect::class)
     * @ORM\JoinTable(name="spell_effect")
     */
    private $effects;

    /**
     * @ORM\ManyToMany(targetEntity=Effect::class)
     * @ORM\JoinTable(name="spell_augmented_effect")
     */
    private $augmentedEffects;

    public function __construct()
    {
        $this->effects = new ArrayCollection();
        $this->augmentedEffects = new ArrayCollection();
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

    public function getDistance(): ?int
    {
        return $this->distance;
    }

    public function setDistance(?int $distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    public function getRadius(): ?int
    {
        return $this->radius;
    }

    public function setRadius(?int $radius): self
    {
        $this->radius = $radius;

        return $this;
    }

    public function getUsesLineOfSight(): ?bool
    {
        return $this->usesLineOfSight;
    }

    public function setUsesLineOfSight(bool $usesLineOfSight): self
    {
        $this->usesLineOfSight = $usesLineOfSight;

        return $this;
    }

    public function getDifficulty(): ?int
    {
        return $this->difficulty;
    }

    public function setDifficulty(int $difficulty): self
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    public function getAugmentDifficulty(): ?int
    {
        return $this->augmentDifficulty;
    }

    public function setAugmentDifficulty(?int $augmentDifficulty): self
    {
        $this->augmentDifficulty = $augmentDifficulty;

        return $this;
    }

    public function getMagicSchool(): ?MagicSchool
    {
        return $this->magicSchool;
    }

    public function setMagicSchool(?MagicSchool $magicSchool): self
    {
        $this->magicSchool = $magicSchool;

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

    /**
     * @return Collection<int, Effect>
     */
    public function getAugmentedEffects(): Collection
    {
        return $this->augmentedEffects;
    }

    public function addAugmentedEffect(Effect $augmentedEffect): self
    {
        if (!$this->augmentedEffects->contains($augmentedEffect)) {
            $this->augmentedEffects[] = $augmentedEffect;
        }

        return $this;
    }

    public function removeAugmentedEffect(Effect $augmentedEffect): self
    {
        $this->augmentedEffects->removeElement($augmentedEffect);

        return $this;
    }
}