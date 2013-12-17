<?php

namespace Portfolio\PortfolioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StudyType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',     'text', array(
				'attr'   =>  array(
					'class'   => 'form-group form-control',
					'val' => '',
					'placeholder' => 'Title',
					'label' => false
				)
            ))
            ->add('enterprise',     'text', array(
				'attr'   =>  array(
					'class'   => 'form-group form-control',
					'val' => '',
					'placeholder' => 'Enterprise',
					'label' => false
				)
            ))
			->add('dates',     'text', array(
				'attr'   =>  array(
					'class'   => 'form-group form-control',
					'val' => '',
					'placeholder' => 'Dates',
					'label' => false
				)
            ))
            ->add('link',     'text', array(
				'attr'   =>  array(
					'class'   => 'form-group form-control',
					'val' => '',
					'placeholder' => 'Link',
					'label' => false
				)
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Portfolio\PortfolioBundle\Entity\Study'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'portfolio_portfoliobundle_study';
    }
}
