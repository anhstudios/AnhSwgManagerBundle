<?php

namespace Anh\SwgManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class AppearanceType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('baseModel')
            ->add('scale')
            ->add('bitMask')
            ->add('entity')
        ;
    }

    public function getName()
    {
        return 'anh_swgmanagerbundle_appearancetype';
    }
}
