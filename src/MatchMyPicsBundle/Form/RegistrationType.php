<?php


namespace MatchMyPicsBundle\Form;


use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use FOS\UserBundle\Model\User;
use MatchMyPicsBundle\Services\RolesHelper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends BaseType
{
    private $roles;
    private $currentUser;

    public function __construct($class, RolesHelper $roles, $user)
    {
        parent::__construct($class);
        $this->roles = $roles;
        $this->currentUser = $user->getToken()->getUser();
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('photo', PhotoType::class);

        if (in_array(User::ROLE_SUPER_ADMIN, $this->currentUser->getRoles())){
            $builder->add('roles', ChoiceType::class, array(
                'choices' => $this->roles->getRoles(),
                'multiple' => true,
                'expanded' => true
            ));
        }
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'user_registration';
    }

}