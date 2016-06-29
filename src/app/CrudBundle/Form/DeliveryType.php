<?php

namespace app\CrudBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DeliveryType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ref')
            ->add('dateDelivery')
            ->add('commands')
            ->add('invoices', EntityType::class, array(
                'class' => 'CrudBundle:Invoice',
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
            'data_class' => 'app\CrudBundle\Entity\Delivery'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_crudbundle_delivery';
    }
}
