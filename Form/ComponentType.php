<?php

namespace Anh\SwgManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ComponentType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('label')
            ->add('description')
            ->add('templates')
        ;
    }

    public function getName()
    {
        return 'anh_swgmanagerbundle_componenttype';
    }
}
