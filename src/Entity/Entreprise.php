<?php

namespace App\Entity;

use App\Repository\EntrepriseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntrepriseRepository::class)
 */
class Entreprise
{
    /**
     * Id de l'entreprise
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Enseigne de l'entreprise
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $enseigne;

    /**
     * Raison sociale de l'entreprise
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $raison_sociale;

    /////////////////////////////////////////////////
    
    /**
     * Numéro RIDET de l'entreprise
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $ridet;

    /**
     * Numéro CAFAT de l'entreprise
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $num_cafat;

    /**
     * Code NAF de l'entreprise
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $code_naf;

    /////////////////////////////////////////////////

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_exec;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $cp_exec;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $commune_exec;

    /**
     * Adresse physique du siège de l'entreprise
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $adresse_siege;

    /**
     * Code postal du siège de l'entreprise
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $cp_siege;

    /**
     * Commune du siège de l'entreprise
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $commune_siege;

    /////////////////////////////////////////////////

    /**
     * Numéro de téléphone de contact de l'entreprise
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $telephone;

    /**
     * Email de contact de l'entreprise
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $email;

    /////////////////////////////////////////////////

    /**
     * Convention collective de l'entreprise
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $convention_collective;

    /**
     * Statut juridique  de l'entreprise
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $statut;

    /**
     * Nombre de salariés dans l'entreprise
     * @ORM\Column(type="integer", nullable=false)
     */
    private $nb_salaries;

    /**
     * @ORM\ManyToMany(targetEntity=Etudiant::class, mappedBy="entreprises")
     */
    private $etudiants;

    /**
     * @ORM\ManyToMany(targetEntity=Tuteur::class, mappedBy="entreprises")
     */
    private $tuteurs;

    public function __construct()
    {
        $this->etudiants = new ArrayCollection();
        $this->tuteurs = new ArrayCollection();
    }

    /////////////////////////////////////////////////
    //              GETTERS & SETTERS              //
    /////////////////////////////////////////////////

    public function getId(): ?int { return $this->id; }

    public function getEnseigne(): ?string { return $this->enseigne; }
    public function setEnseigne(string $enseigne): self { $this->enseigne = $enseigne; return $this; }

    public function getRaisonSociale(): ?string { return $this->raison_sociale; }
    public function setRaisonSociale(string $raison_sociale): self { $this->raison_sociale = $raison_sociale; return $this; }

    public function getRidet(): ?string { return $this->ridet; }
    public function setRidet(string $ridet): self { $this->ridet = $ridet; return $this; }

    public function getNumCafat(): ?string { return $this->num_cafat; }
    public function setNumCafat(string $num_cafat): self { $this->num_cafat = $num_cafat; return $this; }

    public function getCodeNaf(): ?string { return $this->code_naf; }
    public function setCodeNaf(string $code_naf): self { $this->code_naf = $code_naf; return $this; }

    public function getAdresseExec(): ?string { return $this->adresse_exec; }
    public function setAdresseExec(string $adresse_exec): self { $this->adresse_exec = $adresse_exec; return $this; }

    public function getCpExec(): ?string { return $this->cp_exec; }
    public function setCpExec(?string $cp_exec): self { $this->cp_exec = $cp_exec; return $this; }

    public function getCommuneExec(): ?string { return $this->commune_exec; }
    public function setCommuneExec(?string $commune_exec): self { $this->commune_exec = $commune_exec; return $this; }

    public function getAdresseSiege(): ?string { return $this->adresse_siege; }
    public function setAdresseSiege(string $adresse_siege): self { $this->adresse_siege = $adresse_siege; return $this; }

    public function getCpSiege(): ?string { return $this->cp_siege; }
    public function setCpSiege(string $cp_siege): self { $this->cp_siege = $cp_siege; return $this; }

    public function getCommuneSiege(): ?string { return $this->commune_siege; }
    public function setCommuneSiege(string $commune_siege): self { $this->commune_siege = $commune_siege; return $this; }

    public function getTelephone(): ?string { return $this->telephone; }
    public function setTelephone(string $telephone): self { $this->telephone = $telephone; return $this; }

    public function getEmail(): ?string { return $this->email; }
    public function setEmail(string $email): self { $this->email = $email; return $this; }

    public function getConventionCollective(): ?string { return $this->convention_collective; }
    public function setConventionCollective(string $convention_collective): self { $this->convention_collective = $convention_collective; return $this; }

    public function getStatut(): ?string { return $this->statut; }
    public function setStatut(string $statut): self { $this->statut = $statut; return $this; }

    public function getNbSalaries(): ?int { return $this->nb_salaries; }
    public function setNbSalaries(int $nb_salaries): self { $this->nb_salaries = $nb_salaries; return $this; }

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
            $etudiant->addEntreprise($this);
        }

        return $this;
    }

    public function removeEtudiant(Etudiant $etudiant): self
    {
        if ($this->etudiants->contains($etudiant)) {
            $this->etudiants->removeElement($etudiant);
            $etudiant->removeEntreprise($this);
        }
        return $this;
    }

    /**
     * @return Collection|Tuteur[]
     */
    public function getTuteurs(): Collection
    {
        return $this->tuteurs;
    }

    public function addTuteur(Tuteur $tuteur): self
    {
        if (!$this->tuteurs->contains($tuteur)) {
            $this->tuteurs[] = $tuteur;
            $tuteur->addEntreprise($this);
        }

        return $this;
    }

    public function removeTuteur(Tuteur $tuteur): self
    {
        if ($this->tuteurs->contains($tuteur)) {
            $this->tuteurs->removeElement($tuteur);
            $tuteur->removeEntreprise($this);
        }

        return $this;
    }

}
