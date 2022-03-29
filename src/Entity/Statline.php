<?php

namespace App\Entity;

use App\Repository\StatlineRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StatlineRepository::class)
 */
class Statline
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $m;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ws;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bs;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $s;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $t;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $w;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $i;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $a;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ld;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getM(): ?int
    {
        return $this->m;
    }

    public function setM(?int $m): self
    {
        $this->m = $m;

        return $this;
    }

    public function getWs(): ?int
    {
        return $this->ws;
    }

    public function setWs(?int $ws): self
    {
        $this->ws = $ws;

        return $this;
    }

    public function getBs(): ?int
    {
        return $this->bs;
    }

    public function setBs(?int $bs): self
    {
        $this->bs = $bs;

        return $this;
    }

    public function getS(): ?int
    {
        return $this->s;
    }

    public function setS(?int $s): self
    {
        $this->s = $s;

        return $this;
    }

    public function getT(): ?int
    {
        return $this->t;
    }

    public function setT(?int $t): self
    {
        $this->t = $t;

        return $this;
    }

    public function getW(): ?int
    {
        return $this->w;
    }

    public function setW(?int $w): self
    {
        $this->w = $w;

        return $this;
    }

    public function getI(): ?int
    {
        return $this->i;
    }

    public function setI(?int $i): self
    {
        $this->i = $i;

        return $this;
    }

    public function getA(): ?int
    {
        return $this->a;
    }

    public function setA(?int $a): self
    {
        $this->a = $a;

        return $this;
    }

    public function getLd(): ?int
    {
        return $this->ld;
    }

    public function setLd(?int $ld): self
    {
        $this->ld = $ld;

        return $this;
    }
}
