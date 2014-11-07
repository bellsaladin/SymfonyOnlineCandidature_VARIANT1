<?php

namespace Bse\CandidatureBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CandidatureType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cin')
            ->add('cne')
            ->add('nom')
            ->add('prenom')
            ->add('email')            
            ->add('dateNaissance', 'birthday',
                   array( 'empty_value' => array('year' => 'Année', 'month' => 'Mois', 'day' => 'Jour'),
                          'years'=>range(1950, date('Y') - 14)))
            ->add('pays')  
            ->add('ville')
            ->add('adresse')  
            ->add('sexe')
            ->add('activite')
            ->add('etablissementOrigine')
            ->add('typeDiplome')
            ->add('intituleDiplome')
            ->add('diplomeEtranger')
            ->add('systeme')
            ->add('descriptionMemoire')
            ->add('mention')
            ->add('anneeObtentionLicence')
            ->add('anneeObtentionBac')
            ->add('anneeInscription')
            ->add('noteS1')
            ->add('noteS2')
            ->add('noteS3')
            ->add('noteS4')
            ->add('noteS5')
            ->add('noteS6')
            ->add('filiere') 
            ->add('motDePasse')           
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bse\CandidatureBundle\Entity\Candidature'            
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bse_candidaturebundle_candidature';
    }
}
