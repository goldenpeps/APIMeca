<?php

namespace App\Entity;

use App\Repository\ModeleVehiculeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModeleVehiculeRepository::class)]
class ModeleVehicule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column]
    private ?int $Annee = null;

    #[ORM\Column(length: 255)]
    private ?string $Version = null;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'refference_ModeleVehicule')]
    private ?self $id_MarqueVehicule = null;

    #[ORM\OneToMany(mappedBy: 'id_MarqueVehicule', targetEntity: self::class)]
    private Collection $refference_ModeleVehicule;

    #[ORM\ManyToMany(targetEntity: Piece::class, mappedBy: 'Assosiative_PieceModeleVehicule')]
    private Collection $Assosiative_ModeleVehiculePiece;

    public function __construct()
    {
        $this->refference_ModeleVehicule = new ArrayCollection();
        $this->Assosiative_ModeleVehiculePiece = new ArrayCollection();
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

    public function getAnnee(): ?int
    {
        return $this->Annee;
    }

    public function setAnnee(int $Annee): static
    {
        $this->Annee = $Annee;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->Version;
    }

    public function setVersion(string $Version): static
    {
        $this->Version = $Version;

        return $this;
    }

    public function getIdMarqueVehicule(): ?self
    {
        return $this->id_MarqueVehicule;
    }

    public function setIdMarqueVehicule(?self $id_MarqueVehicule): static
    {
        $this->id_MarqueVehicule = $id_MarqueVehicule;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getRefferenceModeleVehicule(): Collection
    {
        return $this->refference_ModeleVehicule;
    }

    public function addRefferenceModeleVehicule(self $refferenceModeleVehicule): static
    {
        if (!$this->refference_ModeleVehicule->contains($refferenceModeleVehicule)) {
            $this->refference_ModeleVehicule->add($refferenceModeleVehicule);
            $refferenceModeleVehicule->setIdMarqueVehicule($this);
        }

        return $this;
    }

    public function removeRefferenceModeleVehicule(self $refferenceModeleVehicule): static
    {
        if ($this->refference_ModeleVehicule->removeElement($refferenceModeleVehicule)) {
            // set the owning side to null (unless already changed)
            if ($refferenceModeleVehicule->getIdMarqueVehicule() === $this) {
                $refferenceModeleVehicule->setIdMarqueVehicule(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Piece>
     */
    public function getAssosiativeModeleVehiculePiece(): Collection
    {
        return $this->Assosiative_ModeleVehiculePiece;
    }

    public function addAssosiativeModeleVehiculePiece(Piece $assosiativeModeleVehiculePiece): static
    {
        if (!$this->Assosiative_ModeleVehiculePiece->contains($assosiativeModeleVehiculePiece)) {
            $this->Assosiative_ModeleVehiculePiece->add($assosiativeModeleVehiculePiece);
            $assosiativeModeleVehiculePiece->addAssosiativePieceModeleVehicule($this);
        }

        return $this;
    }

    public function removeAssosiativeModeleVehiculePiece(Piece $assosiativeModeleVehiculePiece): static
    {
        if ($this->Assosiative_ModeleVehiculePiece->removeElement($assosiativeModeleVehiculePiece)) {
            $assosiativeModeleVehiculePiece->removeAssosiativePieceModeleVehicule($this);
        }

        return $this;
    }
}
