<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Asturies\RespiraXixon\RXBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Description of Coordenadas
 *
 * @author Nahum
 */
class ECoordenadas {

    protected $latitud="43.54261";
    protected $longitud="-5.70472";
    protected $resultado="";
    
    public function getLatitud() {
        return $this->latitud;
    }

    public function getLongitud() {
        return $this->longitud;
    }

    public function getResultado() {
        return $this->resultado;
    }

    public function setLatitud($latitud) {
        $this->latitud = $latitud;
    }

    public function setLongitud($longitud) {
        $this->longitud = $longitud;
    }

    public function setResultado($gps) {
        $this->gps = $resultado;
    }
    
     public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('latitud', new NotBlank());
        $metadata->addPropertyConstraint('longitud', new NotBlank());
    }

}
