<?php

namespace App\Form;

use App\Entity\Etudiant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EtudiantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('sexe')
            ->add('age')
            ->add('telephone')
            ->add('email')
            ->add('date_naiss')
            ->add('lieu_naiss')
            ->add('nationalite')
            ->add('num_cafat')
            ->add('adresse')
            ->add('bp')
            ->add('cp')
            ->add('commune')
            ->add('annee_prec')
            ->add('dernier_emploi')
            ->add('etablissement')
            ->add('dernier_diplome')
            ->add('annee_dernier_diplome')
            ->add('diplome_en_cours')
            ->add('handicap')
            ->add('droit_img')
            ->add('type_formation')
            ->add('licence')
            ->add('decua_rempli')
            ->add('admissibilite')
            ->add('confirm_entretien')
            ->add('admis_list_comp')
            ->add('presence_info_cfa')
            ->add('presence_atelier')
            ->add('presence_job_dating')
            ->add('inscription')
            ->add('observations')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Etudiant::class,
        ]);
    }
}
