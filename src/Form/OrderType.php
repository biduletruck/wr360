<?php

namespace App\Form;

use App\Entity\Order;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('OrderNumber')
            ->remove('DeviationType')
            ->remove('ReasonCode')
            ->remove('CreationDate')
            ->remove('ModificationDate')
            ->remove('DeviationDate')
            ->remove('Store')
            ->remove('Country')
            ->remove('UserId')
            ->remove('OrderType')
            ->add('Traitement', ChoiceType::class, [
                'required' => true,
                'label'  => 'Traitement fait ?' ,
                'expanded'  => true,
                'multiple'  => false,
                'attr'      => array('class' => 'form-control'),
                'choices'  => [
                    'Oui' => 1,
                    'Non' => 0,
                ]])
            ->remove('DebutTraitement')
            ->remove('FinTraitement')
            ->remove('Collaborateur')
            ->add('commentaire')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
        ]);
    }
}
