<?php

namespace App\Entity;

use App\Repository\MarqueVehiculeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\OneToMany(mappedBy: 'id_marqueVehicule', targetEntity: ModeleVehicule::class)]
    private Collection $referenceModeleVehicules;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?DowloadFile $image = null;

    public function __construct()
    {
        $this->referenceModeleVehicules = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, ModeleVehicule>
     */
    public function getReferenceModeleVehicules(): Collection
    {
        return $this->referenceModeleVehicules;
    }

    public function addReferenceModeleVehicule(ModeleVehicule $referenceModeleVehicule): static
    {
        if (!$this->referenceModeleVehicules->contains($referenceModeleVehicule)) {
            $this->referenceModeleVehicules->add($referenceModeleVehicule);
            $referenceModeleVehicule->setIdMarqueVehicule($this);
        }

        return $this;
    }

    public function removeReferenceModeleVehicule(ModeleVehicule $referenceModeleVehicule): static
    {
        if ($this->referenceModeleVehicules->removeElement($referenceModeleVehicule)) {
            // set the owning side to null (unless already changed)
            if ($referenceModeleVehicule->getIdMarqueVehicule() === $this) {
                $referenceModeleVehicule->setIdMarqueVehicule(null);
            }
        }

        return $this;
    }

    public function getImage(): ?DowloadFile
    {
        return $this->image;
    }

    public function setImage(?DowloadFile $image): static
    {
        $this->image = $image;

        return $this;
    }
}
