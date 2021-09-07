<?php

namespace App\Entity;

use App\Repository\GladiatorRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GladiatorRepository::class)
 */
class Gladiator
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $faction;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $weapon;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFaction(): ?string
    {
        return $this->faction;
    }

    public function setFaction(string $faction): self
    {
        $this->faction = $faction;

        return $this;
    }

    public function getWeapon(): ?string
    {
        return $this->weapon;
    }

    public function setWeapon(string $weapon): self
    {
        $this->weapon = $weapon;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
