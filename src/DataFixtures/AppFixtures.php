<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Etudiant;
use App\Entity\Entreprise;
use App\Entity\Tuteur;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        $tEntreprises = array();
        $tmpEntreprises = array();

        $tEtudiants = array();
        $tmpEtudiants = array();

        $tSexe = array('H','F'); //2
        $tNationalite = array('FRANÇAISE','VANUATAISE'); //2
        $tCommune = array(
            'THIO','YATÉ','ÎLE DES PINS','MONT-DORE','NOUMÉA','DUMBÉA','PAÏTA','BOULOUPARIS','LA FOA','SARRAMÉA',
            'FARINO','MOINDOU','BOURAIL','POYA','POUEMBOUT','KONÉ','VOH','KAALA-GOMEN','KOUMAC','POUM',
            'BÉLEP','OUÉGOA','POUÉBO','HIENGHÈNE','TOUHO','POINDIMIÉ','PONERIHOUEN','HOUAÏLOU','KOUAOUA','FRANCE',
            'MARTINIQUE','CANALA','OUVÉA','LIFOU','MARÉ','WALLIS','SUISSE','MADAGASCAR','AFRIQUE','THAILANDE',
            'VANUATU','TAHITI'); //42
        $tAnneePrec = array('SALARIÉ','ÉTUDIANT','ALTERNANT','À LA RECHERCHE D’EMPLOI','PATENTÉ'); //5
        $tEtablissement = array(
            'LYCÉE ANTOINE KELA','LYCÉE DU GRAND NOUMÉA','LYCÉE JULES GARNIER','LYCÉE LAPÉROUSE','LYCÉE DU MONT-DORE',
            'LYCÉE DE BOURAIL','LYCÉE BLAISE PASCAL','LYCÉE AUGUSTE ESCOFFIER','LYCÉE DE POUEMBOUT','LYCÉE SAINT JOSEPH DE CLUNY',
            'IUT-UNC','CCI','UNC','AUTRES/AILLEURS'); //14
        $tDiplome = array(
            'BTS ASSISTANT DE GESTION PME-PMI','BTS ASSISTANT TECHNIQUE D’INGÉNIEUR','BTS BÂTIMENT','BTS COMMERCE INTERNATIONAL','BTS COMMUNICATION',
            'BTS COMPTABILITÉ ET GESTION DES ORGANISATIONS','BTC ÉLECTROTHECNIQUE','BTS TECHNICO-COMMERCIAL','BTS ÉTUDE ET ÉCONOMIE DE LA CONSTRUCTION','BTS MAINTENANCE DES SYSTÈMES, OPTION SYSTÈMES DE PRODUCTION',
            'BTS TOURISME','BTS MANAGEMENT DES UNITÉS COMMERCIALES','BTS NÉGOCIATION DE LA RELATION CLIENT','BTS SERVICES INFORMATIQUES AUX ORGANISATIONS','BTS SUPPORT À L’ACTION MANAGÉRIALE',
            'BTS TRANSPORT ET PRESTATION LOGISTIQUE','DUT GESTION DES ENTREPRISES ET ADMINISTRATION','DUT MÉTIERS DU MULTIMÉDIA ET DE L’INTERNET','L2 ÉCONOMIE ET GESTION','BTS PILOTE DE PROCÉDÉS',
            'BTS SYSTÈMES NUMÉRIQUES','BTS MÉTIERS DES SERVICES À L’ENVIRONNEMENT','BTS BIOANALYSES ET CONTRÔLES','AUTRE DIPLÔMES'); //24
        $tTypeFormation = array('ALTERNANCE','FORMATION CONTINUE','VAE','VEEPAP'); //4
        $tLicence = array(
            'LP CONTRÔLE DE GESTION','LP RÉVISION COMPTABLE','LP COMMERCE ET DISTRIBUTION','LP COMMUNICATION ET ARTS NUMÉRIQUES',
            'LP MÉTIERS DE L’INFORMATIQUE : APPLICATIONS WEB','LP MÉTIERS DE L’INSTRUMENTATION, DE LA MESURE ET DU CONTRÔLE QUALITÉ',
            'LP COLLABORATEUR SOCIAL ET PAIE'); //7
        $tDecua = array('OUI','NON','PEUT-ÊTRE'); //3
        $tAdmissibilite = array('OUI','NON','DECUA VALIDÉ'); //3
        $tConfirmEntretien = array('OUI','DÉSISTEMENT','NON ADMISSIBLE','NON'); //4
        $tListComp = array('OUI','NON','LC 1','LC 2','LC 3','LC 4','LC 5','LC 6'); //8
        $tInscription = array('OUI','NON','DÉSISTEMENT'); //3
        $tBool = array(true,false); //2
        $tStatut = array(
            'Entreprise Individuelle','Entreprise unipersonnelle à responsabilité limitée','Société a responsabilité limitée',
            'Société en participation','Groupement d’intérêt économique','Société anonyme','Société par actions simplifiée',
            'Société en nom collectif'); //7


        /////////////////////////////////
        //          ETUDIANTS          //
        /////////////////////////////////

        for($i = 0; $i <= 70; $i++) {
            $sexe = $tSexe[random_int(0,1)];
            $nationalite = $tNationalite[random_int(0,1)];
            $age = random_int(18,28);
            $tel = ''.random_int(4,9).''.random_int(0,9).'.'.random_int(0,9).''.random_int(0,9).'.'.random_int(0,9).''.random_int(0,9);
            $strDdn = ''.random_int(1,2).''.random_int(0,9).'/0'.random_int(1,9).'/'.(2020-$age);
            $ddn = \DateTime::createFromFormat("d/m/Y",$strDdn);
            $anneePrec = $tAnneePrec[random_int(0,4)];

            $entrepriseNull = new Entreprise();

            $etudiant = new Etudiant();

            $etudiant->setNom($faker->lastName);
            $etudiant->setPrenom($faker->firstName);
            $etudiant->setSexe($sexe);
            $etudiant->setAge($age);
            $etudiant->setTelephone($tel);
            $etudiant->setEmail($faker->freeEmail);
            $etudiant->setDateNaiss($ddn);
            $etudiant->setLieuNaiss($faker->country);
            $etudiant->setNationalite($nationalite);
            $etudiant->setNumCafat($faker->randomNumber(6,false));
            $etudiant->setAdresse($faker->streetAddress);
            $etudiant->setBp($faker->randomNumber(5,false));
            $etudiant->setCp($faker->postcode);
            $etudiant->setCommune($tCommune[random_int(0,41)]);
            $etudiant->setAnneePrec($anneePrec);
            $etudiant->setDernierEmploi($faker->jobTitle);
            $etudiant->setEtablissement($tEtablissement[random_int(0,13)]);
            $etudiant->setDernierDiplome($tDiplome[random_int(0,23)]);
            $etudiant->setAnneeDernierDiplome(random_int(2010,2019));
            $etudiant->setDiplomeEnCours($tDiplome[random_int(0,23)]);
            $etudiant->setHandicap($tBool[random_int(0,1)]);
            $etudiant->setDroitImg($tBool[random_int(0,1)]);
            $etudiant->setTypeFormation($tTypeFormation[random_int(0,3)]);
            $etudiant->setLicence($tLicence[random_int(0,6)]);
            $etudiant->setDecuaRempli($tDecua[random_int(0,2)]);
            $etudiant->setAdmissibilite($tAdmissibilite[random_int(0,2)]);
            $etudiant->setConfirmEntretien($tConfirmEntretien[random_int(0,3)]);
            $etudiant->setAdmisListComp($tListComp[random_int(0,7)]);
            $etudiant->setPresenceInfoCfa($tBool[random_int(0,1)]);
            $etudiant->setPresenceAtelier($tBool[random_int(0,1)]);
            $etudiant->setPresenceJobDating($tBool[random_int(0,1)]);
            $etudiant->setInscription($tInscription[random_int(0,2)]);
            $etudiant->setObservations("observations");

            array_push($tEtudiants,$etudiant);

            $manager->persist($etudiant);
        }

        $tmpEtudiants = $tEtudiants;

        /////////////////////////////////
        //         ENTREPRISES         //
        /////////////////////////////////

        for($j = 0; $j <= 150; $j++) {
            $company = $faker->company;
            $ridet = '0 '.random_int(1,9).random_int(1,9).random_int(1,9).' '.random_int(1,9).random_int(1,9).random_int(1,9).'.'.'00'.random_int(1,3);
            $cafat = $faker->randomNumber(6,false);
            $naf = '0'.random_int(1,9).random_int(1,9).random_int(1,9).'Z';
            $tel = ''.random_int(4,9).''.random_int(0,9).'.'.random_int(0,9).''.random_int(0,9).'.'.random_int(0,9).''.random_int(0,9);
            $statut = $tStatut[random_int(0,6)];
            $nbEtudiants = random_int(0,2);

            $entreprise = new Entreprise();

            $entreprise->setEnseigne($company);
            $entreprise->setRaisonSociale($company);
            $entreprise->setRidet($ridet);
            $entreprise->setNumCafat($cafat);
            $entreprise->setCodeNaf($naf);
            $entreprise->setAdresseExec($faker->streetAddress);
            $entreprise->setCpExec($faker->postcode);
            $entreprise->setCommuneExec($faker->city);
            $entreprise->setAdresseSiege($faker->streetAddress);
            $entreprise->setCpSiege($faker->postcode);
            $entreprise->setCommuneSiege($faker->city);
            $entreprise->setTelephone($tel);
            $entreprise->setEmail($faker->freeEmail);
            $entreprise->setConventionCollective('Convention collective');
            $entreprise->setStatut($statut);
            $entreprise->setNbSalaries(random_int(1,200));

            if($nbEtudiants > 0) {
                for($nb = 1; $nb < $nbEtudiants; $nb++) {
                    $size = count($tmpEtudiants);
                    $index = random_int(0,$size-1);
                    while($tmpEtudiants[$index] == null) { $index = random_int(0,$size-1); }
                    $etudiantTmp = $tmpEtudiants[$index];
                    $entreprise->addEtudiant($etudiantTmp);
                    $tEtudiants[$index] = $etudiantTmp;
                    array_splice($tmpEtudiants, $index, 1, null);
                }
            }

            array_push($tEntreprises,$entreprise);

            $manager->persist($entreprise);
        }

        $tmpEntreprises = $tEntreprises;
        $tmpEtudiants = $tEtudiants;

        /////////////////////////////////
        //           TUTEURS           //
        /////////////////////////////////

        for($k = 0; $k <= 80; $k++) {
            $company = $faker->company;
            $ridet = '0 '.random_int(1,9).random_int(1,9).random_int(1,9).' '.random_int(1,9).random_int(1,9).random_int(1,9).'.'.'00'.random_int(1,3);
            $cafat = $faker->randomNumber(6,false);
            $naf = '0'.random_int(1,9).random_int(1,9).random_int(1,9).'Z';
            $tel = ''.random_int(4,9).''.random_int(0,9).'.'.random_int(0,9).''.random_int(0,9).'.'.random_int(0,9).''.random_int(0,9);
            $statut = $tStatut[random_int(0,6)];
            $dateHabilitation = $faker->dateTime($max = 'now', $timezone = null);
            $dateDiplome = $faker->dateTime($max = 'now', $timezone = null);
            $dateTutorat = $faker->dateTime($max = 'now', $timezone = null);
            $tuteur = new Tuteur();

            $tuteur->setNom($faker->lastName);
            $tuteur->setPrenom($faker->firstName);
            $tuteur->setFonctionOccupe($faker->jobTitle);
            $tuteur->setAnneeExperience(10);
            $tuteur->setDiplomeObtenu($tDiplome[random_int(0,23)]);
            $tuteur->setDiplomeMax($tDiplome[random_int(0,23)]);
            $tuteur->setTelephone($tel);
            $tuteur->setEmail($faker->freeEmail);
            $tuteur->setDateHabilitation($dateHabilitation);
            $tuteur->setDateDiplome($dateDiplome);
            $tuteur->setDateEnvoiEmailTutorat($dateTutorat);

            $tEtudiantLength = count($tEtudiants);
            $iTEtudiant = random_int(0,$tEtudiantLength-1);
            while($tEtudiants[$iTEtudiant] == null) { $iTEtudiant = random_int(0,$tEtudiantLength-1); }

            $tmp_etudiant = $tEtudiants[$iTEtudiant];
            $tuteur->addEtudiant($tmp_etudiant);
            $tmp_entreprise = $tmp_etudiant->getEntreprises();
            array_splice($tmpEtudiants, $iTEtudiant, 1, null);

            if(count($tmp_entreprise) > 0) {
                $tuteur->addEntreprise($tmp_entreprise[0]);
                $key = array_search($tmp_entreprise[0], $tmpEntreprises);
                array_splice($tmpEntreprises, $key, 1, null);
            }

            $manager->persist($tuteur);
        }

        $manager->flush();

    }
}
