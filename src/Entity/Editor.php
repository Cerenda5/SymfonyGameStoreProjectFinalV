<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EditorRepository")
 */
class Editor
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
    private $societyname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nationality;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\VideoGame", mappedBy="editor")
     */
    private $videogame;

    public function __construct()
    {
        $this->videogame = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSocietyname(): ?string
    {
        return $this->societyname;
    }

    public function setSocietyname(string $societyname): self
    {
        $this->societyname = $societyname;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * @return Collection|VideoGame[]
     */
    public function getVideoGame(): Collection
    {
        return $this->videogame;
    }

    public function addVideoGame(VideoGame $videogame): self
    {
        if (!$this->videogame->contains($videogame)) {
            $this->videogame[] = $videogame;
            $videogame->setEditor($this);
        }

        return $this;
    }

    public function removeVideoGame(VideoGame $videogame): self
    {
        if ($this->videogame->contains($videogame)) {
            $this->videogame->removeElement($videogame);
            // set the owning side to null (unless already changed)
            if ($videogame->getEditor() === $this) {
                $videogame->setEditor(null);
            }
        }

        return $this;
    }
}
