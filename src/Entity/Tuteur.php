<?php

namespace App\Entity;

use App\Repository\TuteurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TuteurRepository::class)
 */
class Tuteur
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
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fonction_occupe;

    /**
     * @ORM\Column(type="integer")
     */
    private $annee_experience;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $diplome_obtenu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $diplome_max;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_habilitation;

    /**
     * @ORM\Column(type="date")
     */
    private $date_diplome;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_envoi_email_tutorat;

    /**
     * @ORM\ManyToMany(targetEntity=Entreprise::class, inversedBy="tuteurs")
     */
    private $entreprises;

    /**
     * @ORM\ManyToMany(targetEntity=Etudiant::class, inversedBy="tuteurs")
     */
    private $etudiants;

    public function __construct()
    {
        $this->entreprises = new ArrayCollection();
        $this->etudiants = new ArrayCollection();
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getFonctionOccupe(): ?string
    {
        return $this->fonction_occupe;
    }

    public function setFonctionOccupe(string $fonction_occupe): self
    {
        $this->fonction_occupe = $fonction_occupe;

        return $this;
    }

    public function getAnneeExperience(): ?int
    {
        return $this->annee_experience;
    }

    public function setAnneeExperience(int $annee_experience): self
    {
        $this->annee_experience = $annee_experience;

        return $this;
    }

    public function getDiplomeObtenu(): ?string
    {
        return $this->diplome_obtenu;
    }

    public function setDiplomeObtenu(string $diplome_obtenu): self
    {
        $this->diplome_obtenu = $diplome_obtenu;

        return $this;
    }

    public function getDiplomeMax(): ?string
    {
        return $this->diplome_max;
    }

    public function setDiplomeMax(string $diplome_max): self
    {
        $this->diplome_max = $diplome_max;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
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

    public function getDateHabilitation(): ?\DateTimeInterface
    {
        return $this->date_habilitation;
    }

    public function setDateHabilitation(?\DateTimeInterface $date_habilitation): self
    {
        $this->date_habilitation = $date_habilitation;

        return $this;
    }

    public function getDateDiplome(): ?\DateTimeInterface
    {
        return $this->date_diplome;
    }

    public function setDateDiplome(\DateTimeInterface $date_diplome): self
    {
        $this->date_diplome = $date_diplome;

        return $this;
    }

    public function getDateEnvoiEmailTutorat(): ?\DateTimeInterface
    {
        return $this->date_envoi_email_tutorat;
    }

    public function setDateEnvoiEmailTutorat(?\DateTimeInterface $date_envoi_email_tutorat): self
    {
        $this->date_envoi_email_tutorat = $date_envoi_email_tutorat;

        return $this;
    }

    /**
     * @return Collection|Entreprise[]
     */
    public function getEntreprises(): Collection
    {
        return $this->entreprises;
    }

    public function addEntreprise(Entreprise $entreprise): self
    {
        if (!$this->entreprises->contains($entreprise)) {
            $this->entreprises[] = $entreprise;
        }

        return $this;
    }

    public function removeEntreprise(Entreprise $entreprise): self
    {
        if ($this->entreprises->contains($entreprise)) {
            $this->entreprises->removeElement($entreprise);
        }

        return $this;
    }

    /**
     * @return Collection|Etudiant[]
     */
    public function getEtudiants(): Collection
    {
        return $this->etudiants;
    }

    public function addEtudiant(Etudiant $etudiant): self
    {
        if (!$this->etudiants->contains($etudiant)) {
            $this->etudiants[] = $etudiant;
        }

        return $this;
    }

    public function removeEtudiant(Etudiant $etudiant): self
    {
        if ($this->etudiants->contains($etudiant)) {
            $this->etudiants->removeElement($etudiant);
        }

        return $this;
    }

    public function __toString()
    {
        return $this->getNom() . " " . $this->getPrenom();
    }
}
