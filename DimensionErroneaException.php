<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DimensionErroneaException
 *
 * @author Manu
 */
class DimensionErroneaException extends Exception{
    
    private $valor;
    
    public function __construct($message, $code, $exception,  $valor) {
        parent:: __construct($message, $code, $exception);
        $this->valor = $valor;
    }

    public function __toString() {
        if ($code == 1) {
            return __CLASS__ . " " . "El valor es negativo" . " " . $this->exception . ", " . $this->valor;
        } else if ($code == 2) {
            return __CLASS__ . " " . "El valor es nulo" . " " . $this->exception . ", " . $this->valor;
        } else if ($code == 3) {
            return __CLASS__ . " " . "El valor se excede de lo permitido" . $this->exception . ", " . $this->valor;
        }
    }

}
