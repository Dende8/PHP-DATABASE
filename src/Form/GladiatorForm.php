<?php

namespace App\Form;

use App\Entity\Gladiator;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class GladiatorForm extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options){
        
        $builder->add('faction');
        $builder->add('weapon');
        $builder->add('type', ChoiceType::class,
        [
            'choices' => [
                'Explorador' => 'explorador',
                'Infantería' => 'infanteria',
                'Sacerdote' => 'sacerdote',
                'Hechicero' => 'hechicero'
            ]
        ]);
    }

    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(
            [
                'data_class' => Gladiator::class
            ]
            );
    }

}

?>