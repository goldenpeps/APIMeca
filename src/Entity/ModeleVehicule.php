<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use App\Repository\ModeleVehiculeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

use Hateoas\Configuration\Annotation as Hateoas;
/**  
 * @[Hateoas\Relation](
  *  "self"
   * href= @Hateos\Route("ModeleVehicule.Get"),
   * parameters={"id"="expr(object.getId())"}
   * exlusion =@Hateos\Exclusion(groups="GetNomModele"),
  *) 
*/
/**  
 * @[Hateoas\Relation](
  *  "up"
   * href= @Hateos\Route("ModeleVehicule.Get"),
   * parameters={"id"="expr(object.getId())"}
   * exlusion =@Hateos\Exclusion(groups="GetNomModele"),
  *) 
*/
#[ORM\Entity(repositoryClass: ModeleVehiculeRepository::class)]
class ModeleVehicule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("id")]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups("GetNomModele")]
    private ?string $Nom = null;

    #[ORM\Column]
    #[Groups("Annee")]
    private ?int $Annee = null;

    #[ORM\Column(length: 255)]
    #[Groups("Version")]
    private ?string $Version = null;
 
    #[ORM\ManyToMany(targetEntity: Piece::class, mappedBy: 'Assosiative_PieceModeleVehicule')]  
    #[Groups("Assosiative_ModeleVehiculePiece")]
    private Collection $Assosiative_ModeleVehiculePiece;
    

    #[ORM\ManyToOne(inversedBy: 'referenceModeleVehicules')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups("id_marqueVehicule")]
    private ?MarqueVehicule $id_marqueVehicule = null;


    public function __construct()
    {
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

    public function getIdMarqueVehicule(): ?MarqueVehicule
    {
        return $this->id_marqueVehicule;
    }

    public function setIdMarqueVehicule(?MarqueVehicule $id_marqueVehicule): static
    {
        $this->id_marqueVehicule = $id_marqueVehicule;

        return $this;
    }
}
