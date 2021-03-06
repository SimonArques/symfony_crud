<?php

namespace app\CrudBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrderDetailType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('qte')
            ->add('products')
            ->add('commands', EntityType::class, array(
                'class' => 'CrudBundle:Command',
                'choice_label' => 'ref',
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'app\CrudBundle\Entity\OrderDetail'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_crudbundle_orderdetail';
    }
}
