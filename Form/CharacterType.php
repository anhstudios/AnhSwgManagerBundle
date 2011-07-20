<?php

namespace Anh\SwgManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CharacterType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('createdAt')
            ->add('updatedAt')
            ->add('deletedAt')
            ->add('firstName')
            ->add('lastName')
            ->add('jediState')
            ->add('birthDate')
            ->add('entity')
        ;
    }

    public function getName()
    {
        return 'anh_swgmanagerbundle_charactertype';
    }
}
