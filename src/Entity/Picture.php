<?php

namespace App\Entity;

use App\Repository\PictureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PictureRepository::class)]
class Picture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private  int $id;

    #[ORM\Column(type: 'string', length: 255, unique: true)]
    private string $relative_path;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRelativePath(): ?string
    {
        return $this->relative_path;
    }

    public function setRelativePath(string $relative_path): self
    {
        $this->relative_path = $relative_path;

        return $this;
    }
}
