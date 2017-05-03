<?php

namespace MatchMyPicsBundle\Form;

use Doctrine\ORM\EntityRepository;
use MatchMyPicsBundle\Entity\Parametre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChallengeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class)
            ->add('position', TextType::class)
            ->add('indice', IndiceType::class)
            ->add('photo', PhotoType::class, array(
                "label" => "Photo à matcher"
            ))
            ->add('parametre', EntityType::class, array(
                'class' => 'MatchMyPicsBundle\Entity\Parametre',
                'query_builder' => function (EntityRepository $er){
                    return $er->createQueryBuilder('p')
                        ->where('p.type = :type')
                        ->setParameter('type', Parametre::CHALENGE_TYPE);
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
            'data_class' => 'MatchMyPicsBundle\Entity\Challenge'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'matchmypicsbundle_challenge';
    }


}
