<?php

namespace App\Form;

use App\Entity\Sales;
use App\Entity\Game;
use App\Entity\Client;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SalesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('game', EntityType::class, [
                'class' => Game::class,
                'choice_label' => 'title',
                'label' => 'Game',
            ])
            ->add('client', EntityType::class, [
                'class' => Client::class,
                'choice_label' => 'fullName',
                'label' => 'Client',
                'placeholder' => 'Choose a client',
            ])
            ->add('quantity', IntegerType::class, [
                'label' => 'Quantity',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sales::class,
        ]);
    }
}
