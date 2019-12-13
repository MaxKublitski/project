<?php

namespace App\Form;

use App\Entity\Seanse;
use App\Entity\Movies;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SeanseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $movie = new Movies();
        $builder
            ->add('movie', EntityType::class,
                ['class' => Movies::class,
                'choice_label' => 'title',])
            ->add('time')
            ->add('date')
            ->add('price')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Seanse::class,
        ]);
    }
}
