<?php

namespace Portfolio\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class userType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('email',     'text', array(
				'attr'   =>  array(
					'class'   => 'form-group form-control',
					'val' => '',
					'placeholder' => 'Email',
					'label' => false
				)
            ))
            ->add('username',     'text', array(
				'attr'   =>  array(
					'class'   => 'form-group form-control',
					'val' => '',
					'placeholder' => 'Username',
					'label' => false
				)
            ))
			->add('password', 'password', array(
				'attr'   =>  array(
					'class'   => 'form-group form-control',
					'val' => '',
					'placeholder' => 'Password',
					'label' => false,
					'type' => 'password'
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
            'data_class' => 'Portfolio\UserBundle\Entity\user'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'portfolio_userbundle_user';
    }
}
