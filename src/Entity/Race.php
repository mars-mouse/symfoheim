<?php

namespace App\Entity;

use App\Repository\RaceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RaceRepository::class)
 */
class Race
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
     * @ORM\ManyToMany(targetEntity=Mount::class, inversedBy="races")
     */
    private $allowedMounts;

    /**
     * @ORM\OneToOne(targetEntity=Statline::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $maxStats;

    public function __construct()
    {
        $this->allowedMounts = new ArrayCollection();
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
     * @return Collection<int, Mount>
     */
    public function getAllowedMounts(): Collection
    {
        return $this->allowedMounts;
    }

    public function addAllowedMount(Mount $allowedMount): self
    {
        if (!$this->allowedMounts->contains($allowedMount)) {
            $this->allowedMounts[] = $allowedMount;
        }

        return $this;
    }

    public function removeAllowedMount(Mount $allowedMount): self
    {
        $this->allowedMounts->removeElement($allowedMount);

        return $this;
    }

    public function getMaxStats(): ?Statline
    {
        return $this->maxStats;
    }

    public function setMaxStats(Statline $maxStats): self
    {
        $this->maxStats = $maxStats;

        return $this;
    }
}
