<?php

namespace Anh\SwgManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class EntityTemplateType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('label')
            ->add('description')
            ->add('components')
        ;
    }

    public function getName()
    {
        return 'anh_swgmanagerbundle_entitytemplatetype';
    }
}
