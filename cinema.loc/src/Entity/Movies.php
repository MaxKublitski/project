<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MoviesRepository")
 */
class Movies
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Seanse", mappedBy="movie")
     */
    private $seanses;

    public function __construct()
    {
        $this->seanses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */

    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Movies
     */

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string|null
     */

    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return self
     */

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    /**
     * @return Collection|Seanse[]
     */
    public function getSeanses(): Collection
    {
        return $this->seanses;
    }

    public function addSeanse(Seanse $seanse): self
    {
        if (!$this->seanses->contains($seanse)) {
            $this->seanses[] = $seanse;
            $seanse->setMovie($this);
        }

        return $this;
    }

    public function removeSeanse(Seanse $seanse): self
    {
        if ($this->seanses->contains($seanse)) {
            $this->seanses->removeElement($seanse);
            // set the owning side to null (unless already changed)
            if ($seanse->getMovie() === $this) {
                $seanse->setMovie(null);
            }
        }

        return $this;
    }
}
