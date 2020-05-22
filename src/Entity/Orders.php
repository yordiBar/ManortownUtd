<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrdersRepository")
 */
class Orders
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $productsordered;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $totalcost;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $quantity;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductsordered(): ?string
    {
        return $this->productsordered;
    }

    public function setProductsordered(?string $productsordered): self
    {
        $this->productsordered = $productsordered;

        return $this;
    }

    public function getTotalcost(): ?string
    {
        return $this->totalcost;
    }

    public function setTotalcost(string $totalcost): self
    {
        $this->totalcost = $totalcost;

        return $this;
    }

    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    public function setQuantity(string $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
