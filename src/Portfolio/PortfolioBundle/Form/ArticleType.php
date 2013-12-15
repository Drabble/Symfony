<?php

namespace Portfolio\PortfolioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
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
			->add('autor',     'text', array(
				'attr'   =>  array(
					'class'   => 'form-group form-control',
					'val' => '',
					'placeholder' => 'Autor',
					'label' => false
				)
            ))
			->add('description',     'textarea', array(
				'attr'   =>  array(
					'class'   => 'form-group form-control',
					'val' => '',
					'placeholder' => 'Description',
					'label' => false
				)
            ))
			->add('content',     'textarea', array(
				'attr'   =>  array(
					'class'   => 'form-group form-control',
					'val' => '',
					'placeholder' => 'Content',
					'label' => false
				)
            ))
			->add('image',        new ImageType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Portfolio\PortfolioBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'portfolio_portfoliobundle_article';
    }
}
