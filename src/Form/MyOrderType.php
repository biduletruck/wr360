<?php

namespace App\Form;

use App\Entity\Order;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MyOrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('OrderNumber')
            ->add('DeviationType')
            ->add('ReasonCode')
            ->add('CreationDate')
            ->add('ModificationDate')
            ->add('DeviationDate')
            ->add('Store')
            ->add('Country')
            ->add('UserId')
            ->add('OrderType')
            ->add('Traitement')
            ->add('DebutTraitement')
            ->add('FinTraitement')
            ->add('Commentaire')
            ->add('Collaborateur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
        ]);
    }
}
