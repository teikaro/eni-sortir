<?php

namespace App\Form;

use App\Entity\Etat;
use App\Entity\Sortie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class CreationSortieFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [

                'label' => 'Titre de votre sortie',

                'constraints' => [


                    new NotBlank([
                        'message' => 'Merci de renseigner un titre pour votre sortie'
                    ]),


                    new Length([
                        'min' => 3,
                        'minMessage' => 'Le titre doit contenir au moins {{ limit }} caractères',
                        'max' => 100,
                        'maxMessage' => 'Le titre doit contenir au maximum {{ limit }} caractères'
                    ]),
                ]
            ])

            ->add('dateHeureDebut', DateTimeType::class, [

                'label' => 'Date et heure du début de votre sortie',

                'constraints' => [


                    new NotBlank([
                        'message' => 'Merci de renseigner une date et une heure pour votre sortie'
                    ]),
                ]
            ])

            ->add('duree', TextType::class, [

                'label' => 'Durée de votre sortie',

                'constraints' => [


                    new NotBlank([
                        'message' => 'Merci de renseigner une durée pour votre sortie'
                    ]),


                    new Length([
                        'min' => 1,
                        'minMessage' => 'La durée doit être d\'au moins {{ limit }} minute',
                        'max' => 3,
                        'maxMessage' => 'La durée doit être d\'au maximum 999 minutes'
                    ]),
                ]
            ])

            ->add('dateLimiteInscription', DateTimeType::class, [

               // 'HTML5' => TRUE, 'widget' => 'single_text',

                'label' => 'Date limite d\'inscription à votre sortie',

                'constraints' => [


                    new NotBlank([
                        'message' => 'Merci de renseigner une date limite d\'inscription pour votre sortie'
                    ]),
                ]
            ])

            ->add('nbInscriptionMax', TextType::class, [

                'label' => 'Nombre d\'inscription maximum de votre sortie',

                'constraints' => [


                    new NotBlank([
                        'message' => 'Merci de renseigner un nombre maximum d\'inscription pour votre sortie'
                    ]),


                    new Length([
                        'min' => 1,
                        'minMessage' => 'Le nombre d\'inscription maximum doit être d\'au moins {{ limit }} personne',
                        'max' => 3,
                        'maxMessage' => 'Le nombre d\'inscription maximum doit être d\'au maximum 999 personnes'
                    ]),
                ]
            ])

            ->add('infosSortie', TextType::class, [

                'label' => 'Informations de votre sortie',

            ])

            ->add('adresse', TextType::class, [

                'label' => 'Adresse de votre sortie',

                'constraints' => [


                    new NotBlank([
                        'message' => 'Merci de renseigner une adresse pour votre sortie'
                    ]),


                    new Length([
                        'min' => 10,
                        'minMessage' => 'L\'adresse doit contenir au moins {{ limit }} caractères',
                        'max' => 100,
                        'maxMessage' => 'L\'adresse doit contenir au maximum {{ limit }} caractères'
                    ]),
                ]
            ])

            ->add('ville', TextType::class, [

                'label' => 'Ville de votre sortie',

                'constraints' => [


                    new NotBlank([
                        'message' => 'Merci de renseigner une ville pour votre sortie'
                    ]),


                    new Length([
                        'min' => 3,
                        'minMessage' => 'La ville doit contenir au moins {{ limit }} caractères',
                        'max' => 25,
                        'maxMessage' => 'La ville doit contenir au maximum {{ limit }} caractères'
                    ]),
                ]
            ])

            ->add('cp', TextType::class, [

                'label' => 'Code postal de votre sortie',

                'constraints' => [


                    new NotBlank([
                        'message' => 'Merci de renseigner un code postal pour votre sortie'
                    ]),


                    new Length([
                        'min' => 5,
                        'minMessage' => 'Le code postal doit contenir {{ limit }} caractères',
                        'max' => 5,
                        'maxMessage' => 'La ville doit contenir {{ limit }} caractères'
                    ]),
                ]
            ])

            ->add('etat', EntityType::class, [

                'class' => Etat::class,

                'choice_label' => 'libelle',
            ])

          //  ->add('siteOrganisateur')

            ->add('save', SubmitType::class, [
                'label' => 'Créer une sortie'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sortie::class,
        ]);
    }
}
