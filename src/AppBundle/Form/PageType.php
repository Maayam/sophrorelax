<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

use Symfony\Component\OptionsResolver\OptionsResolver;

class PlotType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
	        ->add('name', TextType::class )
	        ->add('content', TextareaType::class )
            ->add('draft', CheckboxType::class, array('label' => 'Enregistrer dans les brouillons'))
            ->add('save', SubmitType::class, array('label' => 'Enregistrer la Page'))
            ->getForm();
        ;
    }

    //prévention si dans le cas d'embed forms; http://symfony.com/doc/current/forms.html#form-creating-form-classes
	public function configureOptions(OptionsResolver $resolver)
	{
	    $resolver->setDefaults(array(
	        'data_class' => 'AppBundle\Entity\Page',
	    ));
	}
}