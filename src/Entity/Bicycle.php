<?php

namespace App\Entity;

use App\Repository\BicycleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BicycleRepository::class)]
class Bicycle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?string $tires = null;

    #[ORM\Column(length: 20)]
    private ?string $seat = null;

    #[ORM\Column(length: 20)]
    private ?string $frame = null;

    #[ORM\Column(length: 30)]
    private ?string $brakes = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $color = 'black';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTires(): ?string
    {
        return $this->tires;
    }

    public function setTires(string $tires): self
    {
        $this->tires = $tires;

        return $this;
    }

    public function getSeat(): ?string
    {
        return $this->seat;
    }

    public function setSeat(string $seat): self
    {
        $this->seat = $seat;

        return $this;
    }

    public function getFrame(): ?string
    {
        return $this->frame;
    }

    public function setFrame(string $frame): self
    {
        $this->frame = $frame;

        return $this;
    }

    public function getBrakes(): ?string
    {
        return $this->brakes;
    }

    public function setBrakes(string $brakes): self
    {
        $this->brakes = $brakes;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }
}
