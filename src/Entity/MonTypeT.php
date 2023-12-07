<?php

namespace App\Entity;

use App\Repository\MonTypeTRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MonTypeTRepository::class)]
class MonTypeT
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $id_lib = null;

    #[ORM\OneToMany(mappedBy: 'MonTypeT_id', targetEntity: ModeleTest::class)]
    private Collection $modeleTests;

    public function __construct()
    {
        $this->modeleTests = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdLib(): ?string
    {
        return $this->id_lib;
    }

    public function setIdLib(string $id_lib): static
    {
        $this->id_lib = $id_lib;

        return $this;
    }

    /**
     * @return Collection<int, ModeleTest>
     */
    public function getModeleTests(): Collection
    {
        return $this->modeleTests;
    }

    public function addModeleTest(ModeleTest $modeleTest): static
    {
        if (!$this->modeleTests->contains($modeleTest)) {
            $this->modeleTests->add($modeleTest);
            $modeleTest->setMonTypeTId($this);
        }

        return $this;
    }

    public function removeModeleTest(ModeleTest $modeleTest): static
    {
        if ($this->modeleTests->removeElement($modeleTest)) {
            // set the owning side to null (unless already changed)
            if ($modeleTest->getMonTypeTId() === $this) {
                $modeleTest->setMonTypeTId(null);
            }
        }

        return $this;
    }
}
