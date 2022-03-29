<?php

namespace App\Entity;

use App\Repository\MonsterRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MonsterRepository::class)
 */
class Monster
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
     * @ORM\ManyToOne(targetEntity=Warband::class, inversedBy="monsters")
     * @ORM\JoinColumn(nullable=false)
     */
    private $warband;

    /**
     * @ORM\Column(type="integer", options={"default": 1})
     */
    private $wounds;

    /**
     * @ORM\ManyToOne(targetEntity=MonsterType::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $monsterType;

    /**
     * @ORM\ManyToMany(targetEntity=Status::class)
     */
    private $status;

    public function __construct()
    {
        $this->status = new ArrayCollection();
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

    public function getWarband(): ?Warband
    {
        return $this->warband;
    }

    public function setWarband(?Warband $warband): self
    {
        $this->warband = $warband;

        return $this;
    }

    public function getWounds(): ?int
    {
        return $this->wounds;
    }

    public function setWounds(int $wounds): self
    {
        $this->wounds = $wounds;

        return $this;
    }

    public function getMonsterType(): ?MonsterType
    {
        return $this->monsterType;
    }

    public function setMonsterType(?MonsterType $monsterType): self
    {
        $this->monsterType = $monsterType;

        return $this;
    }

    /**
     * @return Collection<int, Status>
     */
    public function getStatus(): Collection
    {
        return $this->status;
    }

    public function addStatus(Status $status): self
    {
        if (!$this->status->contains($status)) {
            $this->status[] = $status;
        }

        return $this;
    }

    public function removeStatus(Status $status): self
    {
        $this->status->removeElement($status);

        return $this;
    }
}