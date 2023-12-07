<?php

namespace App\Entity;

use App\Repository\ContratRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContratRepository::class)]
class Contrat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $PrixTotal = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $Create_at = null;

    #[ORM\Column(length: 255)]
    private ?string $EtatContrat = null;

    #[ORM\ManyToOne(inversedBy: 'ContratReferenceUtilisateurMecano')]
    private ?UtilisateurMecano $Id_utilisateurContrat = null;

    #[ORM\ManyToMany(targetEntity: Piece::class, inversedBy: 'Assosiative_PieceContrat')]
    private Collection $AssosiationContratPiece;

    public function __construct()
    {
        $this->AssosiationContratPiece = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrixTotal(): ?float
    {
        return $this->PrixTotal;
    }

    public function setPrixTotal(float $PrixTotal): static
    {
        $this->PrixTotal = $PrixTotal;

        return $this;
    }

    public function getCreateAt(): ?\DateTimeImmutable
    {
        return $this->Create_at;
    }

    public function setCreateAt(\DateTimeImmutable $Create_at): static
    {
        $this->Create_at = $Create_at;

        return $this;
    }

    public function getEtatContrat(): ?string
    {
        return $this->EtatContrat;
    }

    public function setEtatContrat(string $EtatContrat): static
    {
        $this->EtatContrat = $EtatContrat;

        return $this;
    }

    public function getIdUtilisateurContrat(): ?UtilisateurMecano
    {
        return $this->Id_utilisateurContrat;
    }

    public function setIdUtilisateurContrat(?UtilisateurMecano $Id_utilisateurContrat): static
    {
        $this->Id_utilisateurContrat = $Id_utilisateurContrat;

        return $this;
    }

    /**
     * @return Collection<int, Piece>
     */
    public function getAssosiationContratPiece(): Collection
    {
        return $this->AssosiationContratPiece;
    }

    public function addAssosiationContratPiece(Piece $assosiationContratPiece): static
    {
        if (!$this->AssosiationContratPiece->contains($assosiationContratPiece)) {
            $this->AssosiationContratPiece->add($assosiationContratPiece);
        }

        return $this;
    }

    public function removeAssosiationContratPiece(Piece $assosiationContratPiece): static
    {
        $this->AssosiationContratPiece->removeElement($assosiationContratPiece);

        return $this;
    }
}
