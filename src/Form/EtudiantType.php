<?php

namespace App\Form;

use App\Entity\Etudiant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class EtudiantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('sexe', ChoiceType::class, [
                'choices'  => [
                    'H' => 'H',
                    'F' => 'F',

                ],
            ])
            ->add('age')
            ->add('telephone')
            ->add('email')
            ->add('date_naiss', BirthdayType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'input'  => 'datetime',
            ])
            ->add('lieu_naiss')
            ->add('nationalite')
            ->add('num_cafat')
            ->add('adresse')
            ->add('bp')
            ->add('cp')
            ->add('commune', ChoiceType::class, ['choices' => [
                ' THIO' => ' THIO',
                ' YATÉ' => ' YATÉ',
                ' ÎLE DES PINS' => ' ÎLE DES PINS',
                ' MONT-DORE' => ' MONT-DORE',
                ' NOUMÉA' => ' NOUMÉA',
                ' DUMBÉA' => ' DUMBÉA',
                ' PAÏTA' => ' PAÏTA',
                ' BOULOUPARIS' => ' BOULOUPARIS',
                ' LA FOA' => ' LA FOA',
                ' SARRAMÉA' => ' SARRAMÉA',
                ' FARINO' => ' FARINO',
                ' MOINDOU' => ' MOINDOU',
                ' BOURAIL' => ' BOURAIL',
                ' POYA' => ' POYA',
                ' POUEMBOUT' => ' POUEMBOUT',
                ' KONÉ' => ' KONÉ',
                ' VOH' => ' VOH',
                ' KAALA-GOMEN' => ' KAALA-GOMEN',
                ' KOUMAC' => ' KOUMAC',
                ' POUM' => ' POUM',
                ' BÉLEP' => ' BÉLEP',
                ' OUÉGOA' => ' OUÉGOA',
                ' POUÉBO' => ' POUÉBO',
                ' HIENGHÈNE' => ' HIENGHÈNE',
                ' TOUHO' => ' TOUHO',
                ' POINDIMIÉ' => ' POINDIMIÉ',
                ' PONERIHOUEN' => ' PONERIHOUEN',
                ' HOUAÏLOU' => ' HOUAÏLOU',
                ' KOUAOUA' => ' KOUAOUA',
                ' FRANCE' => ' FRANCE',
                ' MARTINIQUE' => ' MARTINIQUE',
                ' CANALA' => ' CANALA',
                ' OUVÉA' => ' OUVÉA',
                ' LIFOU' => ' LIFOU',
                ' MARÉ' => ' MARÉ',
                ' WALLIS' => ' WALLIS',
                ' SUISSE' => ' SUISSE',
                ' MADAGASCAR' => ' MADAGASCAR',
                ' AFRIQUE' => ' AFRIQUE',
                ' THAILANDE' => ' THAILANDE',
                ' VANUATU' => ' VANUATU',
                ' TAHITI' => ' TAHITI',
            ],])
            ->add('annee_prec')
            ->add('dernier_emploi')
            ->add('etablissement', ChoiceType::class, ['choices' => [
                ' LYCÉE ANTOINE KELA' => ' LYCÉE ANTOINE KELA',
                ' LYCÉE DU GRAND NOUMÉA' => ' LYCÉE DU GRAND NOUMÉA',
                ' LYCÉE JULES GARNIER' => ' LYCÉE JULES GARNIER',
                ' LYCÉE LAPÉROUSE' => ' LYCÉE LAPÉROUSE',
                ' LYCÉE DU MONT-DORE' => ' LYCÉE DU MONT-DORE',
                ' LYCÉE DE BOURAIL' => ' LYCÉE DE BOURAIL',
                ' LYCÉE BLAISE PASCAL' => ' LYCÉE BLAISE PASCAL',
                ' LYCÉE AUGUSTE ESCOFFIER' => ' LYCÉE AUGUSTE ESCOFFIER',
                ' LYCÉE DE POUEMBOUT' => ' LYCÉE DE POUEMBOUT',
                ' LYCÉE SAINT JOSEPH DE CLUNY' => ' LYCÉE SAINT JOSEPH DE CLUNY',
                ' IUT- UNC' => ' IUT- UNC',
                ' CCI' => ' CCI',
                ' UNC' => ' UNC',
                ' AUTRES/AILLEURS' => ' AUTRES/AILLEURS',
            ],])
            ->add('dernier_diplome', ChoiceType::class, [
                'choices' => [
                    ' BTS ASSISTANT DE GESTION PME-PMI' => ' BTS ASSISTANT DE GESTION PME-PMI',
                    ' BTS ASSISTANT TECHNIQUE D’INGÉNIEUR' => ' BTS ASSISTANT TECHNIQUE D’INGÉNIEUR',
                    ' BTS BÂTIMENT' => ' BTS BÂTIMENT',
                    ' BTS COMMERCE INTERNATIONAL' => ' BTS COMMERCE INTERNATIONAL',
                    ' BTS COMMUNICATION' => ' BTS COMMUNICATION',
                    ' BTS COMPTABILITÉ ET GESTION DES ORGANISATIONS' => ' BTS COMPTABILITÉ ET GESTION DES ORGANISATIONS',
                    ' BTC ÉLECTROTHECNIQUE' => ' BTC ÉLECTROTHECNIQUE',
                    ' BTS ÉTUDE ET ÉCONOMIE DE LA CONSTRUCTION' => ' BTS ÉTUDE ET ÉCONOMIE DE LA CONSTRUCTION',
                    ' BTS MAINTENANCE DES SYSTÈMES' => ' BTS MAINTENANCE DES SYSTÈMES',
                    ' OPTION SYSTÈMES DE PRODUCTION' => ' OPTION SYSTÈMES DE PRODUCTION',
                    ' BTS MANAGEMENT DES UNITÉS COMMERCIALES' => ' BTS MANAGEMENT DES UNITÉS COMMERCIALES',
                    ' BTS NÉGOCIATION DE LA RELATION CLIENT' => ' BTS NÉGOCIATION DE LA RELATION CLIENT',
                    ' BTS SERVICES INFORMATIQUES AUX ORGANISATIONS' => ' BTS SERVICES INFORMATIQUES AUX ORGANISATIONS',
                    ' BTS SUPPORT À L’ACTION MANAGÉRIALE' => ' BTS SUPPORT À L’ACTION MANAGÉRIALE',
                    ' BTS TECHNICO-COMMERCIAL' => ' BTS TECHNICO-COMMERCIAL',
                    ' BTS TOURISME' => ' BTS TOURISME',
                    ' BTS TRANSPORT ET PRESTATION LOGISTIQUE' => ' BTS TRANSPORT ET PRESTATION LOGISTIQUE',
                    ' DUT GESTION DES ENTREPRISES ET ADMINISTRATION' => ' DUT GESTION DES ENTREPRISES ET ADMINISTRATION',
                    ' DUT MÉTIERS DU MULTIMÉDIA ET DE L’INTERNET' => ' DUT MÉTIERS DU MULTIMÉDIA ET DE L’INTERNET',
                    ' L2 ÉCONOMIE ET GESTION' => ' L2 ÉCONOMIE ET GESTION',
                    ' BTS PILOTE DE PROCÉDÉS' => ' BTS PILOTE DE PROCÉDÉS',
                    ' BTS MÉTIERS DES SERVICES À L’ENVIRONNEMENT' => ' BTS MÉTIERS DES SERVICES À L’ENVIRONNEMENT',
                    ' BTS BIOANALYSES ET CONTRÔLES' => ' BTS BIOANALYSES ET CONTRÔLES',
                    ' BTS SYSTÈMES NUMÉRIQUES' => ' BTS SYSTÈMES NUMÉRIQUES',
                    ' AUTRE DIPLÔMES' => ' AUTRE DIPLÔMES',
                ],
            ])
            ->add('annee_dernier_diplome')
            ->add('diplome_en_cours')
            ->add('handicap')
            ->add('droit_img')
            ->add('type_formation', ChoiceType::class, [
                'choices'  => [
                    'ALTERNANCE' => 'ALTERNANCE',
                    'FORMATION CONTINUE' => 'FORMATION CONTINUE',
                    'VAE' => 'VAE',
                    'VEEPAP' => 'VEEPAP',
                ],
            ])
            ->add('decua_rempli')
            ->add('admissibilite')
            ->add('confirm_entretien', ChoiceType::class, [
                'choices'  => [
                    'OUI' => 'OUI',
                    'NON' => 'NON',
                    'DESISTEMENT' => 'DESISTEMENT',
                    'NON ADMISSIBLE' => 'NON ADMISSIBLE',
                ],
            ])
            ->add('admis_list_comp', ChoiceType::class, [
                'choices'  => [
                    'OUI' => 'OUI',
                    'NON' => 'NON',
                    'LC 1' => 'LC 1',
                    'LC 2' => 'LC 2',
                    'LC 3' => 'LC 3',
                    'LC 4' => 'LC 4',
                    'LC 5' => 'LC 5',
                    'LC 6' => 'LC 6',
                ],
            ])
            ->add('presence_info_cfa')
            ->add('presence_atelier')
            ->add('formation')
            ->add('presence_job_dating')
            ->add('inscription', ChoiceType::class, [
                'choices'  => [
                    'OUI' => 'OUI',
                    'NON' => 'NON',
                    'DÉSISTEMENT' => 'DÉSISTEMENT',
                ],
            ])
            ->add('observations');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Etudiant::class,
        ]);
    }
}
