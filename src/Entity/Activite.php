<?php

namespace App\Entity;

use App\Repository\ActiviteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActiviteRepository::class)
 */
class Activite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="activites")
     */
    private $participants;

    /**
     * @ORM\ManyToMany(targetEntity=Equipe::class, inversedBy="activites")
     */
    private $equipes;

    /**
     * @ORM\OneToMany(targetEntity=Plage::class, mappedBy="activite")
     */
    private $plages;

    public function __construct()
    {
        $this->user_owner = new ArrayCollection();
        $this->equipes = new ArrayCollection();
        $this->plages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getParticipants(): Collection
    {
        return $this->participants;
    }

    public function addParticipant(User $participant): self
    {
        if (!$this->participants->contains($participant)) {
            $this->participants[] = $participant;
        }

        return $this;
    }

    public function removeParticipant(User $participant): self
    {
        $this->participants->removeElement($participant);

        return $this;
    }

    /**
     * @return Collection|Equipe[]
     */
    public function getEquipes(): Collection
    {
        return $this->equipes;
    }

    public function addEquipe(Equipe $equipe): self
    {
        if (!$this->equipes->contains($equipe)) {
            $this->equipes[] = $equipe;
        }

        return $this;
    }

    public function removeEquipe(Equipe $equipe): self
    {
        $this->equipes->removeElement($equipe);

        return $this;
    }

    /**
     * @return Collection|Plage[]
     */
    public function getPlages(): Collection
    {
        return $this->plages;
    }

    public function addPlage(Plage $plage): self
    {
        if (!$this->plages->contains($plage)) {
            $this->plages[] = $plage;
            $plage->setActivite($this);
        }

        return $this;
    }

    public function removePlage(Plage $plage): self
    {
        if ($this->plages->removeElement($plage)) {
            // set the owning side to null (unless already changed)
            if ($plage->getActivite() === $this) {
                $plage->setActivite(null);
            }
        }

        return $this;
    }
}
