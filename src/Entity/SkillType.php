<?php

namespace App\Entity;

use App\Repository\SkillTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SkillTypeRepository::class)
 */
class SkillType
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
     * @ORM\OneToMany(targetEntity=Skill::class, mappedBy="skillType")
     */
    private $skills;

    /**
     * @ORM\ManyToMany(targetEntity=WarriorType::class, mappedBy="allowedSkillTypes")
     */
    private $warriorTypes;

    public function __construct()
    {
        $this->skills = new ArrayCollection();
        $this->warriorTypes = new ArrayCollection();
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

    /**
     * @return Collection<int, Skill>
     */
    public function getSkills(): Collection
    {
        return $this->skills;
    }

    public function addSkill(Skill $skill): self
    {
        if (!$this->skills->contains($skill)) {
            $this->skills[] = $skill;
            $skill->setSkillType($this);
        }

        return $this;
    }

    public function removeSkill(Skill $skill): self
    {
        if ($this->skills->removeElement($skill)) {
            // set the owning side to null (unless already changed)
            if ($skill->getSkillType() === $this) {
                $skill->setSkillType(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, WarriorType>
     */
    public function getWarriorTypes(): Collection
    {
        return $this->warriorTypes;
    }

    public function addWarriorType(WarriorType $warriorType): self
    {
        if (!$this->warriorTypes->contains($warriorType)) {
            $this->warriorTypes[] = $warriorType;
            $warriorType->addAllowedSkillType($this);
        }

        return $this;
    }

    public function removeWarriorType(WarriorType $warriorType): self
    {
        if ($this->warriorTypes->removeElement($warriorType)) {
            $warriorType->removeAllowedSkillType($this);
        }

        return $this;
    }
}
