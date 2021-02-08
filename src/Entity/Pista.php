<?php

namespace App\Entity;

use App\Repository\PistaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PistaRepository::class)
 */
class Pista
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numPista;

    /**
     * @ORM\OneToMany(targetEntity=Reserva::class, mappedBy="pista", orphanRemoval=true)
     */
    private $reservas;


    public function __construct()
    {
        $this->reservas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumPista(): ?int
    {
        return $this->numPista;
    }

    public function setNumPista(int $numPista): self
    {
        $this->numPista = $numPista;

        return $this;
    }

    /**
     * @return Collection|Reserva[]
     */
    public function getReservas(): Collection
    {
        return $this->reservas;
    }

    public function addReserva(Reserva $reserva): self
    {
        if (!$this->reservas->contains($reserva)) {
            $this->reservas[] = $reserva;
            $reserva->setPista($this);
        }

        return $this;
    }

    public function removeReserva(Reserva $reserva): self
    {
        if ($this->reservas->removeElement($reserva)) {
            // set the owning side to null (unless already changed)
            if ($reserva->getPista() === $this) {
                $reserva->setPista(null);
            }
        }

        return $this;
    }

    
}
