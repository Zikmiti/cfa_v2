<?php

namespace App\Form;

use App\Entity\Tuteur;
use App\Entity\Entreprise;
use App\Entity\Etudiant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class TuteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('fonction_occupe')
            ->add('annee_experience')
            ->add('diplome_max')
            ->add('telephone')
            ->add('email')
            ->add('date_habilitation', BirthdayType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'input'  => 'datetime',
            ])
            ->add('date_diplome', BirthdayType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'input'  => 'datetime',
            ])
            ->add('date_envoi_email_tutorat', BirthdayType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'input'  => 'datetime',
            ])
            ->add('entreprises', EntityType::class, [
                'class' => Entreprise::class,
                'choice_label' => 'enseigne',
                'multiple' => true,
            ])
            ->add('etudiants', EntityType::class, [
               'class' => Etudiant::class,
               'choice_label' => 'nom',
               'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Tuteur::class,
        ]);
    }
}
