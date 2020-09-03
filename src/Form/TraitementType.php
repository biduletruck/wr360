<?php

namespace App\Form;

use App\Entity\Traitement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TraitementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('TicketNumber', NumberType::class, [
                'label' => 'Numéro du ticket traité',
                'attr'      => array('class' => 'form-control'),
            ])
            ->add('Traitement', ChoiceType::class, [
                'required' => true,
                'label'  => 'Traitement réalisé' ,
                'expanded'  => false,
                'multiple'  => false,
                'attr'      => array('class' => 'form-check-input'),
                'choices'  => [
                    'Traitement fait ?' => "",
                    'Oui' => 1,
                    'Non' => 0,
                ]])
            ->add('Comment', TextareaType::class, [
                'label' => 'Indiquer un commentaire si nécessaire',
                'required' => false,
                'attr'      => array('class' => 'form-control'),
            ])
            ->add('DejaTraite', ChoiceType::class, [
                'required' => true,
                'label'  => 'Ticket déjà traité' ,
                'expanded'  => false,
                'multiple'  => false,
                'attr'      => array('class' => 'form-check-input'),
                'choices'  => [
                    'Oui' => 1,
                    'Non' => 0,
                ]])
            ->remove('CreatedAt')
            ->remove('Collaborateur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Traitement::class,
        ]);
    }
}
