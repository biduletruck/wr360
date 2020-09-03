<?php

namespace App\Controller\Admin;

use App\Entity\Traitement;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class TraitementCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Traitement::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            NumberField::new('TicketNumber', 'Numéro du ticket'),
            BooleanField::new('Traitement', 'Traitement réaliaé'),
            AssociationField::new('Collaborateur', 'MemoId conseiller'),
            DateTimeField::new('CreatedAt', 'date de création'),
        ];
    }

}
