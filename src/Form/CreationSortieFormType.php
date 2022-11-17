<?php

namespace App\Form;

use App\Entity\Etat;
use App\Entity\Sortie;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CreationSortieFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('nom', TextType::class, [

                'label' => 'Titre de votre sortie',

                'constraints' => [

                    new NotBlank([
                        'message' => 'Merci de renseigner un nom pour cette sortie'
                    ]),

                    new Length([
                        'min' => 2,
                        'minMessage' => 'Le titre doit contenir au moins {{ limit }} caractères',
                        'max' => 255,
                        'maxMessage' => 'Le titre doit contenir au maximum {{ limit }} caractères'
                    ]),
                ]
            ])

            ->add('dateHeureDebut' , DateTimeType::class, [

                'label' => 'Date et heure du début de votre sortie',

                'constraints' => [

                    new NotBlank([
                        'message' => 'Merci de renseigner une date et une heure pour cette sortie'
                    ]),
                ]
            ])

            ->add('duree', TextType::class, [

                'label' => 'Durée en minutes de votre sortie',

                'constraints' => [

                    new NotBlank([
                        'message' => 'Merci de renseigner une durée pour cette sortie'
                    ]),

                    new Length([
                        'min' => 1,
                        'minMessage' => 'La durée de cette sortie doit être d\'au moins 1 minute',
                        'max' => 3,
                        'maxMessage' => 'La durée de cette sortie doit être de moins de 999 minutes'
                    ]),
                ]
            ])

            ->add('dateLimiteInscription', DateTimeType::class, [

        'label' => 'Date et heure maximale d\'inscription pour votre sortie',

        'constraints' => [

            new NotBlank([
                'message' => 'Merci de renseigner une date et une heure pour l\'inscription cette sortie'
            ]),
        ]
            ])

            ->add('nbInscriptionMax', TextType::class, [

                'label' => 'Nombre maximum de participant pour votre sortie',

                'constraints' => [

                    new NotBlank([
                        'message' => 'Merci de renseigner un nombre maximum de personnes autorisées pour cette sortie'
                    ]),

                    new Length([
                        'min' => 1,
                        'minMessage' => 'Le nombre de participant de cette sortie doit être d\'au moins une personne',
                        'max' => 3,
                        'maxMessage' => 'Le nombre de participant de cette sortie doit être de moins de 999 personnes'
                    ]),
                ]
            ])

            ->add('infosSortie', TextType::class, [

                'label' => 'Informations à propos de votre sortie'

            ])

            ->add('etat', EntityType::class, [
                'class' => Etat::class,
                'choice_label' => 'libelle'
            ])

          // ->add('destination')

            ->add('save', SubmitType::class, [
                'label' => 'Créer cette sortie'
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
