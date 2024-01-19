<?php

namespace App\Entity;

use App\Repository\TypePieceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: TypePieceRepository::class)]
class TypePiece
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("GetId")]

    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups("GetLibelle")]
    private ?string $Libelle_TypePiece = null;

    #[ORM\OneToMany(mappedBy: 'Id_TypePiece', targetEntity: Piece::class)]
    private Collection $ReferenceTablePieces;

    public function __construct()
    {
        $this->ReferenceTablePieces = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleTypePiece(): ?string
    {
        return $this->Libelle_TypePiece;
    }

    public function setLibelleTypePiece(string $Libelle_TypePiece): static
    {
        $this->Libelle_TypePiece = $Libelle_TypePiece;

        return $this;
    }

    /**
     * @return Collection<int, Piece>
     */
    public function getReferenceTablePieces(): Collection
    {
        return $this->ReferenceTablePieces;
    }

    public function addReferenceTablePiece(Piece $referenceTablePiece): static
    {
        if (!$this->ReferenceTablePieces->contains($referenceTablePiece)) {
            $this->ReferenceTablePieces->add($referenceTablePiece);
            $referenceTablePiece->setIdTypePiece($this);
        }

        return $this;
    }

    public function removeReferenceTablePiece(Piece $referenceTablePiece): static
    {
        if ($this->ReferenceTablePieces->removeElement($referenceTablePiece)) {
            // set the owning side to null (unless already changed)
            if ($referenceTablePiece->getIdTypePiece() === $this) {
                $referenceTablePiece->setIdTypePiece(null);
            }
        }

        return $this;
    }
}
