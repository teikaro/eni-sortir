<?php

namespace App\Form;

use App\Entity\Etat;
use App\Entity\Lieu;
use App\Entity\Sortie;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
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

                'label' => 'Durée ( en minutes ) de votre sortie',

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

            ->add('infosSortie', TextareaType::class, [

                'label' => 'Informations à propos de votre sortie'

            ])

            ->add('organisateur')

            ->add('etat', EntityType::class, [
                'class' => Etat::class,
                'choice_label' => 'libelle'
            ])

            ->add('siteOrganisateur')

            ->add('lieu', EntityType::class, [
                'class' => Lieu::class,
                'placeholder' => '',
            ])

            ->add('save', SubmitType::class, [
                'label' => 'Créer cette sortie'
            ])
        ;

        $formModifier = function (FormInterface $form, Sortie $sortie = null) {
            $lieux = null === $sortie ? [] : $sortie->getAvailableLieux();

            $form->add('lieu', EntityType::class, [
                'class' => Lieu::class,
                'placeholder' => '',
                'choices' => $lieux,
            ]);
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {

                $data = $event->getData();

                $formModifier($event->getForm(), $data->getSport());
            }
        );

        $builder->get('sortie')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {

                $sortie = $event->getForm()->getData();

                $formModifier($event->getForm()->getParent(), $sortie);
            }
        );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sortie::class,
        ]);
    }
}
