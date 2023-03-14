<?php

namespace App\Form;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'attr' => [
                    'class' => 'InputContact',
                    'placeholder' => 'John...'
                ]
            ])
            ->add('prenom', TextType::class, [
                'attr' => [
                    'class' => 'InputContact',
                    'placeholder' => 'McClain...'
                ]
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'InputContact',
                    'placeholder' => 'johnmcclain@gmail.com...'
                ]
            ])
            ->add('message', TextareaType::class,[
                'attr' => [
                    'class' => 'InputContact',
                    'placeholder' => 'Yippee-ki-yay'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
?>
