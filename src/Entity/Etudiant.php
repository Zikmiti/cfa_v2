<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EtudiantRepository::class)
 */
class Etudiant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $prenom;

    /*
        Énumération :
        H, F
    */
    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $sexe;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $email;

    /////////////////////////////////////////////////

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $date_naiss;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $lieu_naiss;

    /*
        Énumération :
        FRANÇAISE, VANUATAISE
    */
    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $nationalite;

    /*
        Format :
        6 chiffres
    */
    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $num_cafat;

    /////////////////////////////////////////////////

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $bp;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $cp;

    /*
        Enumération :
        THIO, YATÉ, ÎLE DES PINS, MONT-DORE, NOUMÉA, DUMBÉA, PAÏTA, BOULOUPARIS, LA FOA, SARRAMÉA, 
        FARINO, MOINDOU, BOURAIL, POYA, POUEMBOUT, KONÉ, VOH, KAALA-GOMEN, KOUMAC, POUM, BÉLEP, OUÉGOA, 
        POUÉBO, HIENGHÈNE, TOUHO, POINDIMIÉ, PONERIHOUEN,  HOUAÏLOU, KOUAOUA, FRANCE, MARTINIQUE, 
        CANALA, OUVÉA, LIFOU, MARÉ, WALLIS, SUISSE, MADAGASCAR, AFRIQUE, THAILANDE, VANUATU, TAHITI
    */
    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $commune;

    /////////////////////////////////////////////////

    /*
        Énumération : 
        SALARIÉ, ÉTUDIANT, ALTERNANT, À LA RECHERCHE D’EMPLOI, PATENTÉ
    */
    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $annee_prec;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dernier_emploi;

    /////////////////////////////////////////////////

    /*
        Énumération :
        LYCÉE ANTOINE KELA, LYCÉE DU GRAND NOUMÉA, LYCÉE JULES GARNIER, LYCÉE LAPÉROUSE, 
        LYCÉE DU MONT-DORE, LYCÉE DE BOURAIL, LYCÉE BLAISE PASCAL, LYCÉE AUGUSTE ESCOFFIER, 
        LYCÉE DE POUEMBOUT, LYCÉE SAINT JOSEPH DE CLUNY, IUT- UNC, CCI, UNC, AUTRES/AILLEURS
    */
    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $etablissement;

    /*
        Énumération :
        BTS ASSISTANT DE GESTION PME-PMI, BTS ASSISTANT TECHNIQUE D’INGÉNIEUR, BTS BÂTIMENT, 
        BTS COMMERCE INTERNATIONAL, BTS COMMUNICATION, BTS COMPTABILITÉ ET GESTION DES ORGANISATIONS, 
        BTC ÉLECTROTHECNIQUE, BTS ÉTUDE ET ÉCONOMIE DE LA CONSTRUCTION, BTS MAINTENANCE DES SYSTÈMES, OPTION SYSTÈMES DE PRODUCTION, 
        BTS MANAGEMENT DES UNITÉS COMMERCIALES, BTS NÉGOCIATION DE LA RELATION CLIENT, BTS SERVICES INFORMATIQUES AUX ORGANISATIONS, 
        BTS SUPPORT À L’ACTION MANAGÉRIALE, BTS TECHNICO-COMMERCIAL, BTS TOURISME, BTS TRANSPORT ET PRESTATION LOGISTIQUE, 
        DUT GESTION DES ENTREPRISES ET ADMINISTRATION, DUT MÉTIERS DU MULTIMÉDIA ET DE L’INTERNET, L2 ÉCONOMIE ET GESTION, 
        BTS PILOTE DE PROCÉDÉS, BTS MÉTIERS DES SERVICES À L’ENVIRONNEMENT, BTS BIOANALYSES ET CONTRÔLES, BTS SYSTÈMES NUMÉRIQUES, AUTRE DIPLÔMES
    */
    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $dernier_diplome;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $annee_dernier_diplome;

    /*
        Énumération :
        BTS ASSISTANT DE GESTION PME-PMI, BTS ASSISTANT TECHNIQUE D’INGÉNIEUR, BTS BÂTIMENT, 
        BTS COMMERCE INTERNATIONAL, BTS COMMUNICATION, BTS COMPTABILITÉ ET GESTION DES ORGANISATIONS, 
        BTC ÉLECTROTHECNIQUE, BTS ÉTUDE ET ÉCONOMIE DE LA CONSTRUCTION, BTS MAINTENANCE DES SYSTÈMES, OPTION SYSTÈMES DE PRODUCTION, 
        BTS MANAGEMENT DES UNITÉS COMMERCIALES, BTS NÉGOCIATION DE LA RELATION CLIENT, BTS SERVICES INFORMATIQUES AUX ORGANISATIONS, 
        BTS SUPPORT À L’ACTION MANAGÉRIALE, BTS TECHNICO-COMMERCIAL, BTS TOURISME, BTS TRANSPORT ET PRESTATION LOGISTIQUE, 
        DUT GESTION DES ENTREPRISES ET ADMINISTRATION, DUT MÉTIERS DU MULTIMÉDIA ET DE L’INTERNET, L2 ÉCONOMIE ET GESTION, 
        BTS PILOTE DE PROCÉDÉS, BTS MÉTIERS DES SERVICES À L’ENVIRONNEMENT, BTS BIOANALYSES ET CONTRÔLES, BTS SYSTÈMES NUMÉRIQUES, AUTRE DIPLÔMES
    */
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $diplome_en_cours;

    /////////////////////////////////////////////////

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $handicap;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $droit_img;

    /////////////////////////////////////////////////

    /* 
        Énumération : 
        ALTERNANCE, FORMATION CONTINUE, VAE, VEEPAP
    */
    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $type_formation;

    /* 
        Énumération :
        LP CONTRÔLE DE GESTION, LP RÉVISION COMPTABLE, LP COMMERCE ET DISTRIBUTION, 
        LP COMMUNICATION ET ARTS NUMÉRIQUES, LP MÉTIERS DE L’INFORMATIQUE : APPLICATIONS WEB, 
        LP MÉTIERS DE L’INSTRUMENTATION, DE LA MESURE ET DU CONTRÔLE QUALITÉ,
        LP COLLABORATEUR SOCIAL ET PAIE
    */
    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $licence;

    /////////////////////////////////////////////////

    /*
        Énumération : 
        OUI, NON, PEUT-ÊTRE
    */
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $decua_rempli;

    /* 
        Énumération :
        OUI, NON, DECUA VALIDÉ
    */
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $admissibilite;

    /*
        Énumération :
        OUI, DÉSISTEMENT, NON ADMISSIBLE, NON
    */
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $confirm_entretien;

    /*
        Énumération :
        OUI, NON, LC 1, LC 2, LC 3, LC 4, LC 5, LC 6
    */
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $admis_list_comp;

    /////////////////////////////////////////////////

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $presence_info_cfa;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $presence_atelier;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $presence_job_dating;

    /////////////////////////////////////////////////

    /*
        Énumération :
        OUI, NON, DÉSISTEMENT
    */
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $inscription;

    /////////////////////////////////////////////////

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $observations;


    /////////////////////////////////////////////////
    //              GETTERS & SETTERS              //
    /////////////////////////////////////////////////

    public function getId(): ?int { return $this->id; }

    public function getNom(): ?string { return $this->nom; }
    public function setNom(string $nom): self { $this->nom = $nom; return $this; }

    public function getPrenom(): ?string { return $this->prenom; }
    public function setPrenom(string $prenom): self { $this->prenom = $prenom; return $this; }

    public function getSexe(): ?string { return $this->sexe; }
    public function setSexe(string $sexe): self { $this->sexe = $sexe; return $this; }

    public function getAge(): ?int { return $this->age; }
    public function setAge(int $age): self { $this->age = $age; return $this; }

    public function getDateNaiss(): ?\DateTimeInterface { return $this->date_naiss; }
    public function setDateNaiss(\DateTimeInterface $date_naiss): self { $this->date_naiss = $date_naiss; return $this; }

    public function getLieuNaiss(): ?string { return $this->lieu_naiss; }
    public function setLieuNaiss(string $lieu_naiss): self { $this->lieu_naiss = $lieu_naiss; return $this; }

    public function getNationalite(): ?string { return $this->nationalite; }
    public function setNationalite(string $nationalite): self { $this->nationalite = $nationalite; return $this; }

    public function getNumCafat(): ?string { return $this->num_cafat; }
    public function setNumCafat(string $num_cafat): self { $this->num_cafat = $num_cafat; return $this; }

    public function getAdresse(): ?string { return $this->adresse; }
    public function setAdresse(string $adresse): self { $this->adresse = $adresse; return $this; }

    public function getBp(): ?string { return $this->bp; }
    public function setBp(string $bp): self { $this->bp = $bp; return $this; }

    public function getCp(): ?string { return $this->cp; }
    public function setCp(string $cp): self { $this->cp = $cp; return $this; }

    public function getCommune(): ?string { return $this->commune; }
    public function setCommune(string $commune): self { $this->commune = $commune; return $this; }

    public function getDroitImg(): ?bool { return $this->droit_img; }
    public function setDroitImg(bool $droit_img): self { $this->droit_img = $droit_img; return $this; }

    public function getTelephone(): ?string { return $this->telephone; }
    public function setTelephone(string $telephone): self { $this->telephone = $telephone; return $this; }

    public function getEmail(): ?string { return $this->email; }
    public function setEmail(string $email): self { $this->email = $email; return $this; }

    public function getAnneePrec(): ?string { return $this->annee_prec; }
    public function setAnneePrec(string $annee_prec): self { $this->annee_prec = $annee_prec; return $this; }

    public function getDernierEmploi(): ?string { return $this->dernier_emploi; }
    public function setDernierEmploi(string $dernier_emploi): self { $this->dernier_emploi = $dernier_emploi; return $this; }

    public function getEtablissement(): ?string { return $this->etablissement; }
    public function setEtablissement(string $etablissement): self { $this->etablissement = $etablissement; return $this; }

    public function getHandicap(): ?bool { return $this->handicap; }
    public function setHandicap(bool $handicap): self { $this->handicap = $handicap; return $this; }

    public function getTypeFormation(): ?string { return $this->type_formation; }
    public function setTypeFormation(string $type_formation): self { $this->type_formation = $type_formation; return $this; }

    public function getDernierDiplome(): ?string { return $this->dernier_diplome; }
    public function setDernierDiplome(string $dernier_diplome): self { $this->dernier_diplome = $dernier_diplome; return $this; }

    public function getDiplomeEnCours(): ?string { return $this->diplome_en_cours; }
    public function setDiplomeEnCours(string $diplome_en_cours): self { $this->diplome_en_cours = $diplome_en_cours; return $this; }

    public function getAnneeDernierDiplome(): ?string { return $this->annee_dernier_diplome; }
    public function setAnneeDernierDiplome(string $annee_dernier_diplome): self { $this->annee_dernier_diplome = $annee_dernier_diplome; return $this; }

    public function getDecuaRempli(): ?bool { return $this->decua_rempli; }
    public function setDecuaRempli(bool $decua_rempli): self { $this->decua_rempli = $decua_rempli; return $this; }

    public function getAdmissibilite(): ?bool { return $this->admissibilite; }
    public function setAdmissibilite(bool $admissibilite): self { $this->admissibilite = $admissibilite; return $this; }

    public function getConfirmEntretien(): ?string { return $this->confirm_entretien; }
    public function setConfirmEntretien(string $confirm_entretien): self { $this->confirm_entretien = $confirm_entretien; return $this; }

    public function getAdmisListComp(): ?string { return $this->admis_list_comp; }
    public function setAdmisListComp(string $admis_list_comp): self { $this->admis_list_comp = $admis_list_comp; return $this; }

    public function getPresenceInfoCfa(): ?bool { return $this->presence_info_cfa; }
    public function setPresenceInfoCfa(bool $presence_info_cfa): self { $this->presence_info_cfa = $presence_info_cfa; return $this; }

    public function getPresenceAtelier(): ?bool { return $this->presence_atelier; }
    public function setPresenceAtelier(bool $presence_atelier): self { $this->presence_atelier = $presence_atelier; return $this; }

    public function getPresenceJobDating(): ?bool { return $this->presence_job_dating; }
    public function setPresenceJobDating(bool $presence_job_dating): self { $this->presence_job_dating = $presence_job_dating; return $this; }

    public function getInscription(): ?string { return $this->inscription; }
    public function setInscription(string $inscription): self { $this->inscription = $inscription; return $this; }

    public function getObservations(): ?string { return $this->observations; }
    public function setObservations(string $observations): self { $this->observations = $observations; return $this; }

    public function getLicence(): ?string { return $this->licence; }
    public function setLicence(string $licence): self { $this->licence = $licence; return $this; }
}
