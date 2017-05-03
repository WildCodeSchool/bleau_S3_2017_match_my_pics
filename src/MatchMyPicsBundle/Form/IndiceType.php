<?php

namespace MatchMyPicsBundle\Form;

use Doctrine\ORM\EntityRepository;
use MatchMyPicsBundle\Entity\Parametre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IndiceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('contenu', TextareaType::class, array('attr' => array(
                'rows' => 3, 'cols' => 30)))
            ->add('photo', PhotoType::class, array(
                "label" => "Photo de l'indice"
            ))
            ->add('parametre', EntityType::class, array(
                'class' => 'MatchMyPicsBundle\Entity\Parametre',
                'query_builder' => function (EntityRepository $er){
                    return $er->createQueryBuilder('p')
                        ->where('p.type = :type')
                        ->setParameter('type', Parametre::INDICE_TYPE);
                },
                'choice_label' => 'param',
                'expanded' => false,
                'multiple' => false
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MatchMyPicsBundle\Entity\Indice'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'matchmypicsbundle_indice';
    }


}
