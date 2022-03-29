<?php

namespace App\Entity;

use App\Repository\WarbandRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToOne(targetEntity=Campaign::class, mappedBy="warband", cascade={"persist", "remove"})
     */
    private $campaign;

    /**
     * @ORM\ManyToMany(targetEntity=MiscEquipment::class)
     */
    private $miscEquipments;

    /**
     * @ORM\OneToMany(targetEntity=Warrior::class, mappedBy="warband", orphanRemoval=true)
     */
    private $warriors;

    /**
     * @ORM\ManyToOne(targetEntity=WarbandType::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $warbandType;

    /**
     * @ORM\OneToMany(targetEntity=Monster::class, mappedBy="warband", orphanRemoval=true)
     */
    private $monsters;

    public function __construct()
    {
        $this->miscEquipments = new ArrayCollection();
        $this->warriors = new ArrayCollection();
        $this->monsters = new ArrayCollection();
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

    public function getCampaign(): ?Campaign
    {
        return $this->campaign;
    }

    public function setCampaign(?Campaign $campaign): self
    {
        // unset the owning side of the relation if necessary
        if ($campaign === null && $this->campaign !== null) {
            $this->campaign->setWarband(null);
        }

        // set the owning side of the relation if necessary
        if ($campaign !== null && $campaign->getWarband() !== $this) {
            $campaign->setWarband($this);
        }

        $this->campaign = $campaign;

        return $this;
    }

    /**
     * @return Collection<int, MiscEquipment>
     */
    public function getMiscEquipments(): Collection
    {
        return $this->miscEquipments;
    }

    public function addMiscEquipment(MiscEquipment $miscEquipment): self
    {
        if (!$this->miscEquipments->contains($miscEquipment)) {
            $this->miscEquipments[] = $miscEquipment;
        }

        return $this;
    }

    public function removeMiscEquipment(MiscEquipment $miscEquipment): self
    {
        $this->miscEquipments->removeElement($miscEquipment);

        return $this;
    }

    /**
     * @return Collection<int, Warrior>
     */
    public function getWarriors(): Collection
    {
        return $this->warriors;
    }

    public function addWarrior(Warrior $warrior): self
    {
        if (!$this->warriors->contains($warrior)) {
            $this->warriors[] = $warrior;
            $warrior->setWarband($this);
        }

        return $this;
    }

    public function removeWarrior(Warrior $warrior): self
    {
        if ($this->warriors->removeElement($warrior)) {
            // set the owning side to null (unless already changed)
            if ($warrior->getWarband() === $this) {
                $warrior->setWarband(null);
            }
        }

        return $this;
    }

    public function getWarbandType(): ?WarbandType
    {
        return $this->warbandType;
    }

    public function setWarbandType(?WarbandType $warbandType): self
    {
        $this->warbandType = $warbandType;

        return $this;
    }

    /**
     * @return Collection<int, Monster>
     */
    public function getMonsters(): Collection
    {
        return $this->monsters;
    }

    public function addMonster(Monster $monster): self
    {
        if (!$this->monsters->contains($monster)) {
            $this->monsters[] = $monster;
            $monster->setWarband($this);
        }

        return $this;
    }

    public function removeMonster(Monster $monster): self
    {
        if ($this->monsters->removeElement($monster)) {
            // set the owning side to null (unless already changed)
            if ($monster->getWarband() === $this) {
                $monster->setWarband(null);
            }
        }

        return $this;
    }
}