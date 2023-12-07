<?php

namespace App\Entity;

use App\Repository\MarqueVehiculeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MarqueVehiculeRepository::class)]
class MarqueVehicule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelle_vehicule = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleVehicule(): ?string
    {
        return $this->libelle_vehicule;
    }

    public function setLibelleVehicule(string $libelle_vehicule): static
    {
        $this->libelle_vehicule = $libelle_vehicule;

        return $this;
    }
}
