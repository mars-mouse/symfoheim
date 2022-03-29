<?php

namespace App\Entity;

use App\Repository\MagicSchoolRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MagicSchoolRepository::class)
 */
class MagicSchool
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
     * @ORM\OneToMany(targetEntity=WarriorType::class, mappedBy="magicSchool")
     */
    private $warriorTypes;

    /**
     * @ORM\OneToMany(targetEntity=Spell::class, mappedBy="magicSchool")
     */
    private $spells;

    public function __construct()
    {
        $this->warriorTypes = new ArrayCollection();
        $this->spells = new ArrayCollection();
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
            $warriorType->setMagicSchool($this);
        }

        return $this;
    }

    public function removeWarriorType(WarriorType $warriorType): self
    {
        if ($this->warriorTypes->removeElement($warriorType)) {
            // set the owning side to null (unless already changed)
            if ($warriorType->getMagicSchool() === $this) {
                $warriorType->setMagicSchool(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Spell>
     */
    public function getSpells(): Collection
    {
        return $this->spells;
    }

    public function addSpell(Spell $spell): self
    {
        if (!$this->spells->contains($spell)) {
            $this->spells[] = $spell;
            $spell->setMagicSchool($this);
        }

        return $this;
    }

    public function removeSpell(Spell $spell): self
    {
        if ($this->spells->removeElement($spell)) {
            // set the owning side to null (unless already changed)
            if ($spell->getMagicSchool() === $this) {
                $spell->setMagicSchool(null);
            }
        }

        return $this;
    }
}
