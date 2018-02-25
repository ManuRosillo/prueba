<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estanteria
 *
 * @author Manu
 */
class Estanteria {

    private $material;
    private $arrayLeja=array();
    private $nLejas;
    private $lejasOcupadas=0;
                
        function __construct($material, $nLejas) {
        $this->material . setMaterial($material);
        $this->cajas . setNLejas($nLejas);
        
    }
    function getNLejas() {
        return $this->nLejas;
    }

    function getLejasOcupadas() {
        return $this->lejasOcupadas;
    }

    function setNLejas($nLejas) {
        $this->nLejas = $nLejas;
    }

    function setLejasOcupadas($lejasOcupadas) {
        $this->lejasOcupadas = $lejasOcupadas;
    }

        function getMaterial() {
        return $this->material;
    }

   

    function getArrayLeja() {
        return $this->arrayLeja;
    }

    function setMaterial($material) {
        $this->material = $material;
    }

   

    function setArrayLeja($arrayLeja) {
        $this->arrayLeja = $arrayLeja;
    }

//    function meterCaja($caja) {
//        try {
//
//            if ($this->arrayLeja != 0) {
//                $this->arrayLeja--;
//                array_push($this->cajas, $caja);
//            } else {
//
//                throw new Exception("No hay mas espacio en la estanteria.<br>");
//            }
//        } catch (Exception $ex) {
//            echo $ex->getMessage();
//        }
//    }
//    
    public function anadirCaja ($caja){
        if($this->nLejas ==$this->lejasOcupadas){
            
            throw new EstanteriaLlenaException ("Estanteria llena",0);
            
        
        }
        array_push($this->lejas, $caja);
        $this->lejasOcupadas++;
    }
            
    public function __toString() {
        $mensaje="La estanteria esta hecha de: " . $this->material . "<br>"
                 . "<br>";
        foreach($this->lejas as $position=>$contenido){
            $mensaje.=" " .($position+1)." caja: " . $contenido."<br>";
        }
        return  $mensaje;
    }

}
