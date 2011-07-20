<?php

namespace Anh\SwgManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class SceneType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('terrain')
            ->add('entities')
        ;
    }

    public function getName()
    {
        return 'anh_swgmanagerbundle_scenetype';
    }
}
