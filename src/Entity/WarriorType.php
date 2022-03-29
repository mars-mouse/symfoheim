<?php

namespace App\Entity;

use App\Repository\WarriorTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WarriorTypeRepository::class)
 */
class WarriorType
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
    private $min;

    /**
     * @ORM\Column(type="integer")
     */
    private $max;

    /**
     * @ORM\OneToOne(targetEntity=Statline::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $baseStats;

    /**
     * @ORM\ManyToMany(targetEntity=SkillType::class, inversedBy="warriorTypes")
     */
    private $allowedSkillTypes;

    /**
     * @ORM\ManyToOne(targetEntity=WarriorRank::class, inversedBy="warriorTypes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $warriorRank;

    /**
     * @ORM\ManyToOne(targetEntity=MagicSchool::class, inversedBy="warriorTypes")
     */
    private $magicSchool;

    /**
     * @ORM\ManyToMany(targetEntity=Effect::class)
     */
    private $effects;

    public function __construct()
    {
        $this->allowedSkillTypes = new ArrayCollection();
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

    public function getMin(): ?int
    {
        return $this->min;
    }

    public function setMin(int $min): self
    {
        $this->min = $min;

        return $this;
    }

    public function getMax(): ?int
    {
        return $this->max;
    }

    public function setMax(int $max): self
    {
        $this->max = $max;

        return $this;
    }

    public function getBaseStats(): ?Statline
    {
        return $this->baseStats;
    }

    public function setBaseStats(Statline $baseStats): self
    {
        $this->baseStats = $baseStats;

        return $this;
    }

    /**
     * @return Collection<int, SkillType>
     */
    public function getAllowedSkillTypes(): Collection
    {
        return $this->allowedSkillTypes;
    }

    public function addAllowedSkillType(SkillType $allowedSkillType): self
    {
        if (!$this->allowedSkillTypes->contains($allowedSkillType)) {
            $this->allowedSkillTypes[] = $allowedSkillType;
        }

        return $this;
    }

    public function removeAllowedSkillType(SkillType $allowedSkillType): self
    {
        $this->allowedSkillTypes->removeElement($allowedSkillType);

        return $this;
    }

    public function getWarriorRank(): ?WarriorRank
    {
        return $this->warriorRank;
    }

    public function setWarriorRank(?WarriorRank $warriorRank): self
    {
        $this->warriorRank = $warriorRank;

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
}
