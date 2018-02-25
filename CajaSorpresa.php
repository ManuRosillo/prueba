<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CajaSorpresa
 *
 * @author Manu
 */
include_once  "Caja.php";
class CajaSorpresa extends Caja {
    
    private $contenido;
    
    function __construct($anchura, $altura, $profundidad, $color , $contenido) {
        parent::__construct($anchura, $altura, $profundidad, $color);
        $this->contenido.setContenido($contenido);
    }
                
    function getContenido() {
        return $this->contenido;
    }

    function setContenido($contenido) {
        $this->contenido = $contenido;
    }
    
    public function __toString() {
         $descCaja = parent::__toString();
         
         return $descCaja."El contenido de la caja es:".$this->contenido;
        
        
    }

    public function getVolumen() {
        
        return $this->getAltura()*$this->getAnchura()*$this->getProfundidad();
        
    }

}
