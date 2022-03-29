<?php

namespace App\Entity;

use App\Repository\WarriorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WarriorRepository::class)
 */
class Warrior
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
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $exp;

    /**
     * @ORM\ManyToOne(targetEntity=Warband::class, inversedBy="warriors")
     * @ORM\JoinColumn(nullable=false)
     */
    private $warband;

    /**
     * @ORM\ManyToOne(targetEntity=WarriorType::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $warriorType;

    /**
     * @ORM\ManyToOne(targetEntity=Race::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $race;

    /**
     * @ORM\OneToOne(targetEntity=Statline::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $statline;

    /**
     * @ORM\ManyToMany(targetEntity=Skill::class)
     */
    private $skills;

    /**
     * @ORM\ManyToMany(targetEntity=CloseCombatWeapon::class)
     */
    private $closeCombatWeapons;

    /**
     * @ORM\ManyToOne(targetEntity=MissileWeapon::class)
     */
    private $missileWeapon;

    /**
     * @ORM\ManyToOne(targetEntity=Armour::class)
     */
    private $armour;

    /**
     * @ORM\ManyToMany(targetEntity=Spell::class)
     */
    private $spells;

    /**
     * @ORM\ManyToOne(targetEntity=Mount::class)
     */
    private $mount;

    /**
     * @ORM\ManyToMany(targetEntity=Status::class)
     */
    private $status;

    /**
     * @ORM\Column(type="integer", options={"default": 1})
     */
    private $wounds;

    public function __construct()
    {
        $this->skills = new ArrayCollection();
        $this->closeCombatWeapons = new ArrayCollection();
        $this->spells = new ArrayCollection();
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

    public function getExp(): ?int
    {
        return $this->exp;
    }

    public function setExp(?int $exp): self
    {
        $this->exp = $exp;

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

    public function getWarriorType(): ?WarriorType
    {
        return $this->warriorType;
    }

    public function setWarriorType(?WarriorType $warriorType): self
    {
        $this->warriorType = $warriorType;

        return $this;
    }

    public function getRace(): ?Race
    {
        return $this->race;
    }

    public function setRace(?Race $race): self
    {
        $this->race = $race;

        return $this;
    }

    public function getStatline(): ?Statline
    {
        return $this->statline;
    }

    public function setStatline(Statline $statline): self
    {
        $this->statline = $statline;

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
        }

        return $this;
    }

    public function removeSkill(Skill $skill): self
    {
        $this->skills->removeElement($skill);

        return $this;
    }

    /**
     * @return Collection<int, CloseCombatWeapon>
     */
    public function getCloseCombatWeapons(): Collection
    {
        return $this->closeCombatWeapons;
    }

    public function addCloseCombatWeapon(CloseCombatWeapon $closeCombatWeapon): self
    {
        if (!$this->closeCombatWeapons->contains($closeCombatWeapon)) {
            $this->closeCombatWeapons[] = $closeCombatWeapon;
        }

        return $this;
    }

    public function removeCloseCombatWeapon(CloseCombatWeapon $closeCombatWeapon): self
    {
        $this->closeCombatWeapons->removeElement($closeCombatWeapon);

        return $this;
    }

    public function getMissileWeapon(): ?MissileWeapon
    {
        return $this->missileWeapon;
    }

    public function setMissileWeapon(?MissileWeapon $missileWeapon): self
    {
        $this->missileWeapon = $missileWeapon;

        return $this;
    }

    public function getArmour(): ?Armour
    {
        return $this->armour;
    }

    public function setArmour(?Armour $armour): self
    {
        $this->armour = $armour;

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
        }

        return $this;
    }

    public function removeSpell(Spell $spell): self
    {
        $this->spells->removeElement($spell);

        return $this;
    }

    public function getMount(): ?Mount
    {
        return $this->mount;
    }

    public function setMount(?Mount $mount): self
    {
        $this->mount = $mount;

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

    public function getWounds(): ?int
    {
        return $this->wounds;
    }

    public function setWounds(?int $wounds): self
    {
        $this->wounds = $wounds;

        return $this;
    }
}