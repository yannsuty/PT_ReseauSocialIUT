<?php
#Vianney
namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class Inscription extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder #créé les champs
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('date_de_naissance', DateType::class, array('widget' => 'single_text', 'format' => 'yyyy-MM-dd','required' => false))
            ->add('mail', EmailType::class)
            ->add('mail_upec', EmailType::class, array('required' => false))
            ->add('statut', ChoiceType::class, array('required' => false, 'placeholder' => false, 
                    'choices' => array(
                        'statut' => null,
                        'etudiant' => 'etudiant',
                        'prof' => 'prof')
                ))
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
