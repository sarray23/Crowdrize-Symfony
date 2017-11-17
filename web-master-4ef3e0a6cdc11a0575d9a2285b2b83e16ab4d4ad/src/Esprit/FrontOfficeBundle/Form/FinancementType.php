<?php

namespace Esprit\FrontOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FinancementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Type')
            ->add('Montant')
            //->add('idUtilisateur')
            //->add('idprojet')
                ->add('valider', 'submit');
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\FrontOfficeBundle\Entity\Financement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'esprit_frontofficebundle_financement';
    }
}
