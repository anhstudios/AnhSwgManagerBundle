<?php

namespace Anh\SwgManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class EntityType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('template')
        ;
    }

    public function getName()
    {
        return 'anh_swgmanagerbundle_entitytype';
    }
}
