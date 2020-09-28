<?php

namespace App\Form;

use App\Entity\Entreprise;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EntrepriseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('enseigne')
            ->add('raison_sociale')
            ->add('ridet')
            ->add('num_cafat')
            ->add('code_naf')
            ->add('adresse_siege')
            ->add('cp_siege')
            ->add('commune_siege')
            ->add('telephone')
            ->add('email')
            ->add('convention_collective')
            ->add('statut')
            ->add('nb_salaries')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Entreprise::class,
        ]);
    }
}
