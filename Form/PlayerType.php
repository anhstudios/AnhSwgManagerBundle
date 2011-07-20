<?php

namespace Anh\SwgManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PlayerType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('referenceId')
            ->add('maxCharacters')
            ->add('characters')
        ;
    }

    public function getName()
    {
        return 'anh_swgmanagerbundle_playertype';
    }
}
