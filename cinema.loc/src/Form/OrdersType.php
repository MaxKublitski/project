<?php

namespace App\Form;

use App\Entity\Hall;
use App\Entity\Orders;
use App\Entity\Seanse;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrdersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user', EntityType::class,
                ['class' => User::class,
                'choice_label' => 'email'])
            ->add('seanses', EntityType::class,
                ['class' => Seanse::class,
                    'choice_label' => 'id'])
            ->add('hall', EntityType::class,
                ['class' => Hall::class,
                    'choice_label' => 'id'])
            ->add('total_price')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Orders::class,
        ]);
    }
}
