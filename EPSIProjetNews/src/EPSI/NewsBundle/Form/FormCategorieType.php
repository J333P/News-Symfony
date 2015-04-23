<?php

namespace EPSI\NewsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FormCategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        $builder

            ->add('nomCategorie', 'text')

                ->add('envoyer', 'submit');
    }
    
    public function getName() {
        return 'EPSINewsBundle_FormCategorie';
    }
}