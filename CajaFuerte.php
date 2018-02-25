<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CajaFuerte
 *
 * @author Manu
 */
include_once "Caja.php";
class CajaFuerte extends Caja {
    
    private $tipoCerradura;
    private $clave;
    
    function __construct($anchura, $altura, $profundidad, $color , $tipoCerradura , $clave) {
        parent::__construct($anchura, $altura, $profundidad, $color);
        $this->clave.setClave($clave);
        $this->tipoCerradura.setTipoCerradura($tipoCerradura);
    }
    
    function getTipoCerradura() {
        return $this->tipoCerradura;
    }

    function getClave() {
        return $this->clave;
    }

    function setTipoCerradura($tipoCerradura) {
        $this->tipoCerradura = $tipoCerradura;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }
    
    public function __toString() {
        $descCaja = parent::__toString();
         
         return $descCaja."El tipo de cerradura es:".$this->tipoCerradura."</br>"."La clave es:".$this->clave;
        
    }

    public function getVolumen() {
        
          return $this->getAltura()*$this->getAnchura()*$this->getProfundidad();
    }

}
