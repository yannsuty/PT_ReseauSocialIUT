<?php
#Suty
namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class Connexion extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder #créé les champs

            ->add('mail', EmailType::class, array('label' => "Email*"))
            ->add('password', PasswordType::class, array('label' => "Mot de passe*"));
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
