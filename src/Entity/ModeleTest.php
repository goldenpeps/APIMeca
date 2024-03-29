<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ModeleTestRepository;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: ModeleTestRepository::class)]
class ModeleTest
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups("GetmodeleTests")]
    #[Assert\NotBlank(message: "une erreur est survenue")]
    private ?string $name = null;

    #[ORM\Column(nullable: true)]
    private ?int $age = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $create_at = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $update_at = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\ManyToOne(inversedBy: 'modeleTests')]
    #[ORM\JoinColumn(nullable: false)]
    private ?MonTypeT $MonTypeT_id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $Create_by = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $Update_by = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getCreateAt(): ?\DateTimeImmutable
    {
        return $this->create_at;
    }

    public function setCreateAt(\DateTimeImmutable $create_at): static
    {
        $this->create_at = $create_at;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeImmutable
    {
        return $this->update_at;
    }

    public function setUpdateAt(\DateTimeImmutable $update_at): static
    {
        $this->update_at = $update_at;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getMonTypeTId(): ?MonTypeT
    {
        return $this->MonTypeT_id;
    }

    public function setMonTypeTId(?MonTypeT $MonTypeT_id): static
    {
        $this->MonTypeT_id = $MonTypeT_id;

        return $this;
    }

    public function getCreateBy(): ?User
    {
        return $this->Create_by;
    }

    public function setCreateBy(?User $Create_by): static
    {
        $this->Create_by = $Create_by;

        return $this;
    }

    public function getUpdateBy(): ?User
    {
        return $this->Update_by;
    }

    public function setUpdateBy(?User $Update_by): static
    {
        $this->Update_by = $Update_by;

        return $this;
    }
}
