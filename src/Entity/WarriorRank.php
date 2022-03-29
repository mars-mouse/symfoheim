<?php

namespace App\Entity;

use App\Repository\WarriorRankRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

// HEROES / HENCHMEN

/**
 * @ORM\Entity(repositoryClass=WarriorRankRepository::class)
 */
class WarriorRank
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
     * @ORM\OneToMany(targetEntity=WarriorType::class, mappedBy="warriorRank")
     */
    private $warriorTypes;

    public function __construct()
    {
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
            $warriorType->setWarriorRank($this);
        }

        return $this;
    }

    public function removeWarriorType(WarriorType $warriorType): self
    {
        if ($this->warriorTypes->removeElement($warriorType)) {
            // set the owning side to null (unless already changed)
            if ($warriorType->getWarriorRank() === $this) {
                $warriorType->setWarriorRank(null);
            }
        }

        return $this;
    }
}