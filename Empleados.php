<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "empleados")]
class Empleados
{
    #[ORM\Id]
    #[ORM\Column(name: "NumeroEmpleado", type: "integer")]
    private int $NumeroEmpleado;

    #[ORM\Column(name: "ExtTelef", type: "integer", nullable: true)]
    private ?int $ExtTelef;

    #[ORM\Column(name: "FechaNac", type: "date", nullable: true)]
    private ?\DateTimeInterface $FechaNac;

    #[ORM\Column(name: "FechaInc", type: "date", nullable: true)]
    private ?\DateTimeInterface $FechaInc;

    #[ORM\Column(name: "Salario", type: "integer", nullable: true)]
    private ?int $Salario;

    #[ORM\Column(name: "Comision", type: "integer", nullable: true)]
    private ?int $Comision;

    #[ORM\Column(name: "Numhijos", type: "integer", nullable: true)]
    private ?int $Numhijos;

    #[ORM\Column(name: "NombreEmpleado", type: "string", length: 10, nullable: true)]
    private ?string $NombreEmpleado;

    #[ORM\ManyToOne(targetEntity: Departamentos::class)]
    #[ORM\JoinColumn(name: "NumDepartamento", referencedColumnName: "NumDepartamento", onDelete: "CASCADE", onUpdate: "CASCADE")]
    private Departamentos $departamento;

    // … getters y setters …

    public function getNumeroEmpleado(): int
    {
        return $this->NumeroEmpleado;
    }

    public function setNumeroEmpleado(int $NumeroEmpleado): self
    {
        $this->NumeroEmpleado = $NumeroEmpleado;
        return $this;
    }

    public function getExtTelef(): ?int
    {
        return $this->ExtTelef;
    }

    public function setExtTelef(?int $ExtTelef): self
    {
        $this->ExtTelef = $ExtTelef;
        return $this;
    }

    public function getFechaNac(): ?\DateTimeInterface
    {
        return $this->FechaNac;
    }

    public function setFechaNac(?\DateTimeInterface $FechaNac): self
    {
        $this->FechaNac = $FechaNac;
        return $this;
    }

    public function getFechaInc(): ?\DateTimeInterface
    {
        return $this->FechaInc;
    }

    public function setFechaInc(?\DateTimeInterface $FechaInc): self
    {
        $this->FechaInc = $FechaInc;
        return $this;
    }

    public function getSalario(): ?int
    {
        return $this->Salario;
    }

    public function setSalario(?int $Salario): self
    {
        $this->Salario = $Salario;
        return $this;
    }

    public function getComision(): ?int
    {
        return $this->Comision;
    }

    public function setComision(?int $Comision): self
    {
        $this->Comision = $Comision;
        return $this;
    }

    public function getNumhijos(): ?int
    {
        return $this->Numhijos;
    }

    public function setNumhijos(?int $Numhijos): self
    {
        $this->Numhijos = $Numhijos;
        return $this;
    }

    public function getNombreEmpleado(): ?string
    {
        return $this->NombreEmpleado;
    }

    public function setNombreEmpleado(?string $NombreEmpleado): self
    {
        $this->NombreEmpleado = $NombreEmpleado;
        return $this;
    }

    public function getDepartamento(): Departamentos
    {
        return $this->departamento;
    }

    public function setDepartamento(Departamentos $departamento): self
    {
        $this->departamento = $departamento;
        return $this;
    }
}
