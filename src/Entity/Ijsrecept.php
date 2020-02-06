<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IjsreceptRepository")
 */
class Ijsrecept
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $naam;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ingredientenlijst;

    /**
     * @ORM\Column(type="float")
     */
    private $kosten;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNaam(): ?string
    {
        return $this->naam;
    }

    public function setNaam(string $naam): self
    {
        $this->naam = $naam;

        return $this;
    }

    public function getIngredientenlijst(): ?string
    {
        return $this->ingredientenlijst;
    }

    public function setIngredientenlijst(string $ingredientenlijst): self
    {
        $this->ingredientenlijst = $ingredientenlijst;

        return $this;
    }

    public function getKosten(): ?float
    {
        return $this->kosten;
    }

    public function setKosten(float $kosten): self
    {
        $this->kosten = $kosten;

        return $this;
    }
}
