<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "centros")]
class Centros
{
    #[ORM\Id]
    #[ORM\Column(name: "NumCentro", type: "integer")]
    private int $NumCentro;

    #[ORM\Column(name: "NombreCentro", type: "string", length: 25, unique: true)]
    private string $NombreCentro;

    #[ORM\Column(name: "DireccionCentro", type: "string", length: 25, nullable: true)]
    private ?string $DireccionCentro;

    // --- GETTERS Y SETTERS ---

    public function getNumCentro(): int
    {
        return $this->NumCentro;
    }

    public function setNumCentro(int $NumCentro): self
    {
        $this->NumCentro = $NumCentro;
        return $this;
    }

    public function getNombreCentro(): string
    {
        return $this->NombreCentro;
    }

    public function setNombreCentro(string $NombreCentro): self
    {
        $this->NombreCentro = $NombreCentro;
        return $this;
    }

    public function getDireccionCentro(): ?string
    {
        return $this->DireccionCentro;
    }

    public function setDireccionCentro(?string $DireccionCentro): self
    {
        $this->DireccionCentro = $DireccionCentro;
        return $this;
    }
}
