<?php

namespace App\Entity;

use App\Repository\ReservaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservaRepository::class)
 */
class Reserva
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha;

    /**
     * @ORM\ManyToOne(targetEntity=Usuario::class, inversedBy="reservas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $usuario;

    /**
     * @ORM\ManyToOne(targetEntity=Pista::class, inversedBy="reservas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pista;

    /**
     * @ORM\ManyToOne(targetEntity=Hora::class, inversedBy="reservas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $hora;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getPista(): ?Pista
    {
        return $this->pista;
    }

    public function setPista(?Pista $pista): self
    {
        $this->pista = $pista;

        return $this;
    }

    public function getHora(): ?Hora
    {
        return $this->hora;
    }

    public function setHora(?Hora $hora): self
    {
        $this->hora = $hora;

        return $this;
    }
}
