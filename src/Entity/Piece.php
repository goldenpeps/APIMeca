<?php

namespace App\Entity;

use App\Repository\PieceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PieceRepository::class)]
class Piece
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups("GetNom")]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $Reference = null;

    #[ORM\Column]
    private ?float $Prix = null;

    #[ORM\ManyToOne(inversedBy: 'ReferenceTablePieces')]
    #[ORM\JoinColumn(nullable: false)]
    private ?TypePiece $Id_TypePiece = null;

    #[ORM\ManyToMany(targetEntity: Contrat::class, mappedBy: 'AssosiationContratPiece')]
    private Collection $Assosiative_PieceContrat;

    #[ORM\ManyToMany(targetEntity: ModeleVehicule::class, inversedBy: 'Assosiative_ModeleVehiculePiece')]
    private Collection $Assosiative_PieceModeleVehicule;

    public function __construct()
    {
        $this->Assosiative_PieceContrat = new ArrayCollection();
        $this->Assosiative_PieceModeleVehicule = new ArrayCollection();
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

    public function getReference(): ?string
    {
        return $this->Reference;
    }

    public function setReference(string $Reference): static
    {
        $this->Reference = $Reference;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->Prix;
    }

    public function setPrix(float $Prix): static
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getIdTypePiece(): ?TypePiece
    {
        return $this->Id_TypePiece;
    }

    public function setIdTypePiece(?TypePiece $Id_TypePiece): static
    {
        $this->Id_TypePiece = $Id_TypePiece;

        return $this;
    }

    /**
     * @return Collection<int, Contrat>
     */
    public function getAssosiativePieceContrat(): Collection
    {
        return $this->Assosiative_PieceContrat;
    }

    public function addAssosiativePieceContrat(Contrat $assosiativePieceContrat): static
    {
        if (!$this->Assosiative_PieceContrat->contains($assosiativePieceContrat)) {
            $this->Assosiative_PieceContrat->add($assosiativePieceContrat);
            $assosiativePieceContrat->addAssosiationContratPiece($this);
        }

        return $this;
    }

    public function removeAssosiativePieceContrat(Contrat $assosiativePieceContrat): static
    {
        if ($this->Assosiative_PieceContrat->removeElement($assosiativePieceContrat)) {
            $assosiativePieceContrat->removeAssosiationContratPiece($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeleVehicule>
     */
    public function getAssosiativePieceModeleVehicule(): Collection
    {
        return $this->Assosiative_PieceModeleVehicule;
    }

    public function addAssosiativePieceModeleVehicule(ModeleVehicule $assosiativePieceModeleVehicule): static
    {
        if (!$this->Assosiative_PieceModeleVehicule->contains($assosiativePieceModeleVehicule)) {
            $this->Assosiative_PieceModeleVehicule->add($assosiativePieceModeleVehicule);
        }

        return $this;
    }

    public function removeAssosiativePieceModeleVehicule(ModeleVehicule $assosiativePieceModeleVehicule): static
    {
        $this->Assosiative_PieceModeleVehicule->removeElement($assosiativePieceModeleVehicule);

        return $this;
    }
}
