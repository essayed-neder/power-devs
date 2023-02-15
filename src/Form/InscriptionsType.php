<?php

namespace App\Form;
use App\Entity\Inscriptions;
use App\Entity\Evenements;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class InscriptionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('tel')
            ->add('genre')
            ->add('id',EntityType::class,['class'=> Evenements::class,
            'choice_label'=>'titre',
            'label'=>'id'])        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Inscriptions::class,
        ]);
    }
}
