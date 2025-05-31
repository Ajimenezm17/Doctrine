<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "departamentos")]
class Departamentos
{
    #[ORM\Id]
    #[ORM\Column(name: "NumDepartamento", type: "integer")]
    private int $NumDepartamento;

    #[ORM\ManyToOne(targetEntity: Centros::class)]
    #[ORM\JoinColumn(name: "NumCentro", referencedColumnName: "NumCentro", onDelete: "CASCADE", onUpdate: "CASCADE")]
    private Centros $centro;

    #[ORM\Column(name: "DirecDepartamento", type: "integer", nullable: true)]
    private ?int $DirecDepartamento;

    #[ORM\Column(name: "TipoDireccion", type: "string", length: 1, nullable: true)]
    private ?string $TipoDireccion;

    #[ORM\Column(name: "Presupuesto", type: "decimal", precision: 3, scale: 1, nullable: true)]
    private ?float $Presupuesto;

    #[ORM\ManyToOne(targetEntity: self::class)]
    #[ORM\JoinColumn(name: "DepDependiente", referencedColumnName: "NumDepartamento", onDelete: "CASCADE", onUpdate: "CASCADE", nullable: true)]
    private ?Departamentos $DepDependiente;

    #[ORM\Column(name: "NombreDepartamento", type: "string", length: 20, nullable: true)]
    private ?string $NombreDepartamento;

    // … getters y setters …

    public function getNumDepartamento(): int
    {
        return $this->NumDepartamento;
    }

    public function setNumDepartamento(int $NumDepartamento): self
    {
        $this->NumDepartamento = $NumDepartamento;
        return $this;
    }

    public function getCentro(): Centros
    {
        return $this->centro;
    }

    public function setCentro(Centros $centro): self
    {
        $this->centro = $centro;
        return $this;
    }

    public function getDirecDepartamento(): ?int
    {
        return $this->DirecDepartamento;
    }

    public function setDirecDepartamento(?int $DirecDepartamento): self
    {
        $this->DirecDepartamento = $DirecDepartamento;
        return $this;
    }

    public function getTipoDireccion(): ?string
    {
        return $this->TipoDireccion;
    }

    public function setTipoDireccion(?string $TipoDireccion): self
    {
        $this->TipoDireccion = $TipoDireccion;
        return $this;
    }

    public function getPresupuesto(): ?float
    {
        return $this->Presupuesto;
    }

    public function setPresupuesto(?float $Presupuesto): self
    {
        $this->Presupuesto = $Presupuesto;
        return $this;
    }

    public function getDepDependiente(): ?Departamentos
    {
        return $this->DepDependiente;
    }

    public function setDepDependiente(?Departamentos $DepDependiente): self
    {
        $this->DepDependiente = $DepDependiente;
        return $this;
    }

    public function getNombreDepartamento(): ?string
    {
        return $this->NombreDepartamento;
    }

    public function setNombreDepartamento(?string $NombreDepartamento): self
    {
        $this->NombreDepartamento = $NombreDepartamento;
        return $this;
    }
}
