<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Asturies\RespiraXixon\RXBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of coordenadas
 *
 * @author Nahum
 */
class FCoordenadas extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $builder->add('latitud');
            $builder->add('longitud');
            $builder->add('resultado','textarea');
        }
        
    public function getName()
        {
            return 'coordenadas';
        }

}
