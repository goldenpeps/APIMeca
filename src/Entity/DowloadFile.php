<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\DowloadFileRepository;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\AsciiSlugger;

#[ORM\Entity(repositoryClass: DowloadFileRepository::class)]
class DowloadFile
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $realName = null;


    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    private ?File $file = null;

    #[ORM\Column(length: 255)]
    private ?string $mimeType = null;

    #[ORM\Column(length: 255)]
    private ?string $publicpath = null;


    #[ORM\Column(length: 255)]
    private ?string $etat = null;


  

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

    public function getRealName(): ?string
    {
        return $this->realName;
    }

    public function setRealName(string $realName): static
    {
        $this->realName = $realName;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $slugger = new AsciiSlugger();
        $parseslug = $slugger->slug($slug . time());
        $this->slug = $parseslug.".". $this->getFile()->getClientOriginalExtension();

        return $this;
    }

    public function getFile(): ?UploadedFile
    {
        return $this->file;
    }

    public function setFile(UploadedFile $file): static
    {
        $this->file = $file;
        
        $this->setName($file->getClientOriginalName());
        $this->setRealName($file->getClientOriginalName());
        $this->setPublicpath($file->getClientOriginalName());
        $this->setMimeType($file->getClientMimeType());
        $this->setSlug($file->getClientOriginalName());
        $file->move(
            $this->getPublicpath(),
            $this->getSlug()
        );
        return $this;
    }

    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    public function setMimeType(string $mimeType): static
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    public function getPublicpath(): ?string
    {
        return $this->publicpath;
    }

    public function setPublicpath(string $publicpath): static
    {
        $this->publicpath = $publicpath;

        return $this;
    }

 


    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

}
