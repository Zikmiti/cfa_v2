<?php

namespace App\Entity;

use App\Repository\EntrepriseRepository;
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
     * Adresse physique du siège de l'entreprise
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $adresse_siege;

    /**
     * Code postal du siège de l'entreprise
     * @ORM\Column(type="integer", nullable=false)
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

    public function getAdresseExecution(): ?string { return $this->adresse_execution; }
    public function setAdresseExecution(string $adresse_execution): self { $this->adresse_execution = $adresse_execution; return $this; }

    public function getCpExecution(): ?int { return $this->cp_execution; }
    public function setCpExecution(int $cp_execution): self { $this->cp_execution = $cp_execution; return $this; }

    public function getCommuneExecution(): ?string { return $this->commune_execution; }
    public function setCommuneExecution(string $commune_execution): self { $this->commune_execution = $commune_execution; return $this; }

    public function getAdresseSiege(): ?string { return $this->adresse_siege; }
    public function setAdresseSiege(string $adresse_siege): self { $this->adresse_siege = $adresse_siege; return $this; }

    public function getCpSiege(): ?int { return $this->cp_siege; }
    public function setCpSiege(int $cp_siege): self { $this->cp_siege = $cp_siege; return $this; }

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

}
