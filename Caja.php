<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once "DimensionErroneaException.php";

abstract class Caja {

    private $anchura;
    private $altura;
    private $profundidad;
    private $color;

    function __construct($anchura, $altura, $profundidad, $color) {

        $this->anchura . setAnchura($anchura);
        $this->altura . setAltura($altura);
        $this->profundidad . setProfundidad($profundidad);
        $this->color . setColor($color);
    }

    function getAnchura() {
        return $this->anchura;
    }

    function getAltura() {
        return $this->altura;
    }

    function getProfundidad() {
        return $this->profundidad;
    }

    function getColor() {
        return $this->color;
    }

   public function setAncho($ancho) {
        if($ancho<0){
            throw new Exception("Negativo",1,DimensionErroneaException, $ancho);
        }
        else if($ancho==0){
            throw new Exception("Es igual a 0",2,DimensionErroneaException, $ancho);
        }
        else if($ancho>100){
            throw new Exception("Es demasiado grande",3,DimensionErroneaException, $ancho);
        }
        else
            $this->ancho = $ancho;
    }


    function setAltura($altura) {
         if($altura<0){
            throw new Exception("Negativo",1,DimensionErroneaException, $altura);
        }
        else if($altura==0){
            throw new Exception("Es igual a 0",2,DimensionErroneaException, $altura);
        }
        else if($altura>100){
            throw new Exception("Es demasiado grande",3,DimensionErroneaException, $altura);
        }
        else
            $this->altura = $altura;
    }

    function setProfundidad($profundidad) {
         if($profundidad<0){
            throw new Exception("Negativo",1,DimensionErroneaException, $profundidad);
        }
        else if($profundidad==0){
            throw new Exception("Es igual a 0",2,DimensionErroneaException, $profundidad);
        }
        else if($profundidad>100){
            throw new Exception("Es demasiado grande",3,DimensionErroneaException, $profundidad);
        }
        else
            $this->profundidad = $profundidad;
    }

    function setColor($color) {
        $this->color = $color;
    }
    
    abstract function getVolumen();



    public function __toString() {

        $mensaje = "";

        return "Las caracteristicas de la caja son:" . "</br>" . "Anchura:" . $this->anchura . "</br>" .
                "Altura:" . $this->altura . "</br>" . "Profundidad:" . $this->profundidad . "</br>" . "Color:" . $this->color . "</br>";
    }

}
