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
     * @ORM\Column(type="integer")
     */
    private $user_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $hall_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $seanse_id;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $total_price;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getHallId(): ?int
    {
        return $this->hall_id;
    }

    public function setHallId(int $hall_id): self
    {
        $this->hall_id = $hall_id;

        return $this;
    }

    public function getSeanseId(): ?int
    {
        return $this->seanse_id;
    }

    public function setSeanseId(int $seanse_id): self
    {
        $this->seanse_id = $seanse_id;

        return $this;
    }

    public function getTotalPrice(): ?string
    {
        return $this->total_price;
    }

    public function setTotalPrice(string $total_price): self
    {
        $this->total_price = $total_price;

        return $this;
    }
}
