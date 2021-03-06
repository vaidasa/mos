<?php

namespace App\Form;

use App\Entity\TimeSlot;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TimeSlotType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', TextType::class, array(
                'attr' => array(
                    'autocomplete' => 'off'
                )
            ))
            ->add('startTime', TextType::class, array(
                'attr' => array(
                    'autocomplete' => 'off'
                )
            ))
            ->add('duration', NumberType::class, array(
                'attr' => array(
                    'autocomplete' => 'off'
                )
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => TimeSlot::class,
        ));
    }
}
