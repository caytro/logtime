<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"email"}, message="Il existe déjà un compte avec cette adresse courriel")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isVerified = false;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, unique=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\OneToMany(targetEntity=Equipe::class, mappedBy="manager")
     */
    private $managed_equipes;

    /**
     * @ORM\ManyToMany(targetEntity=Equipe::class, mappedBy="participant")
     */
    private $participe_equipes;

    /**
     * @ORM\ManyToMany(targetEntity=Activite::class, mappedBy="user_owner")
     */
    private $activites;

    /**
     * @ORM\OneToMany(targetEntity=Plage::class, mappedBy="participant")
     */
    private $plages;

    public function __construct()
    {
        $this->managed_equipes = new ArrayCollection();
        $this->participe_equipes = new ArrayCollection();
        $this->activites = new ArrayCollection();
        $this->plages = new ArrayCollection();
    }

 
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * @return Collection|Equipe[]
     */
    public function getManagedEquipes(): Collection
    {
        return $this->managed_equipes;
    }

    public function addManagedEquipe(Equipe $managedEquipe): self
    {
        if (!$this->managed_equipes->contains($managedEquipe)) {
            $this->managed_equipes[] = $managedEquipe;
            $managedEquipe->setManager($this);
        }

        return $this;
    }

    public function removeManagedEquipe(Equipe $managedEquipe): self
    {
        if ($this->managed_equipes->removeElement($managedEquipe)) {
            // set the owning side to null (unless already changed)
            if ($managedEquipe->getManager() === $this) {
                $managedEquipe->setManager(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Equipe[]
     */
    public function getParticipeEquipes(): Collection
    {
        return $this->participe_equipes;
    }

    public function addParticipeEquipe(Equipe $participeEquipe): self
    {
        if (!$this->participe_equipes->contains($participeEquipe)) {
            $this->participe_equipes[] = $participeEquipe;
            $participeEquipe->addParticipant($this);
        }

        return $this;
    }

    public function removeParticipeEquipe(Equipe $participeEquipe): self
    {
        if ($this->participe_equipes->removeElement($participeEquipe)) {
            $participeEquipe->removeParticipant($this);
        }

        return $this;
    }

    /**
     * @return Collection|Activite[]
     */
    public function getActivites(): Collection
    {
        return $this->activites;
    }

    public function addActivite(Activite $activite): self
    {
        if (!$this->activites->contains($activite)) {
            $this->activites[] = $activite;
            $activite->addUserOwner($this);
        }

        return $this;
    }

    public function removeActivite(Activite $activite): self
    {
        if ($this->activites->removeElement($activite)) {
            $activite->removeUserOwner($this);
        }

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
            $plage->setParticipant($this);
        }

        return $this;
    }

    public function removePlage(Plage $plage): self
    {
        if ($this->plages->removeElement($plage)) {
            // set the owning side to null (unless already changed)
            if ($plage->getParticipant() === $this) {
                $plage->setParticipant(null);
            }
        }

        return $this;
    }

 }
