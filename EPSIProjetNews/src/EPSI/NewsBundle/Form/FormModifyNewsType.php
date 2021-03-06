<?php

namespace EPSI\NewsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use EPSI\NewsBundle\Entity\news;

class FormModifyNewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        $builder->add('titre', 'text') ->add('contenu', 'textarea')
                ->add('date', 'date')->add('categorie','entity',array('class'=>'EPSINewsBundle:categorie', 'property'=>'nomCategorie'))
                ->add('tag','entity',array('class'=>'EPSINewsBundle:tag', 'property'=>'intitule', 'multiple'=>'true','expanded'=>"true"))

                ->add('envoyer', 'submit');
    }
    
    public function getName() {
        return 'EPSINewsBundle_FormModifyNews';
    }
}