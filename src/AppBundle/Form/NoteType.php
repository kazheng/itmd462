<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class NoteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('noteSubject',textType::class,
                    array(
                    'label' => 'Note Subject',
                    'required' => true,
                    'attr' =>
                        array('size' => 50,
                        'placeholder' => 'What\'s the subject?',
                        )
                    )
                )

            ->add('noteBody',textAreaType::class,
                array(
                    'label' => 'Note Body',
                    'required' => true,
                    'attr' =>
                        array('size' => 50,
                            'placeholder' => 'Type note body here',
                        )
                )
            )
            ->add('noteAuthor',textType::class,
                array(
                    'label' => 'Note Author',
                    'required' => true,
                    'attr' =>
                        array('size' => 50,
                            'placeholder' => 'Who are you?',
                        )
                )
            )
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Note'
        ));
    }
}
