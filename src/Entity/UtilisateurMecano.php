<?php

namespace App\Entity;

use App\Repository\UtilisateurMecanoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateurMecanoRepository::class)]
class UtilisateurMecano
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $Prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $Adresse = null;

    #[ORM\Column]
    private ?int $CodePostal = null;

    #[ORM\OneToMany(mappedBy: 'Id_utilisateurContrat', targetEntity: Contrat::class)]
    private Collection $ContratReferenceUtilisateurMecano;

    public function __construct()
    {
        $this->ContratReferenceUtilisateurMecano = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): static
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): static
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->CodePostal;
    }

    public function setCodePostal(int $CodePostal): static
    {
        $this->CodePostal = $CodePostal;

        return $this;
    }

    /**
     * @return Collection<int, Contrat>
     */
    public function getContratReferenceUtilisateurMecano(): Collection
    {
        return $this->ContratReferenceUtilisateurMecano;
    }

    public function addContratReferenceUtilisateurMecano(Contrat $contratReferenceUtilisateurMecano): static
    {
        if (!$this->ContratReferenceUtilisateurMecano->contains($contratReferenceUtilisateurMecano)) {
            $this->ContratReferenceUtilisateurMecano->add($contratReferenceUtilisateurMecano);
            $contratReferenceUtilisateurMecano->setIdUtilisateurContrat($this);
        }

        return $this;
    }

    public function removeContratReferenceUtilisateurMecano(Contrat $contratReferenceUtilisateurMecano): static
    {
        if ($this->ContratReferenceUtilisateurMecano->removeElement($contratReferenceUtilisateurMecano)) {
            // set the owning side to null (unless already changed)
            if ($contratReferenceUtilisateurMecano->getIdUtilisateurContrat() === $this) {
                $contratReferenceUtilisateurMecano->setIdUtilisateurContrat(null);
            }
        }

        return $this;
    }
}
