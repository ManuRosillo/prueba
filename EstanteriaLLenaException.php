<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EstanteriaLLenaException
 *
 * @author Manu
 */
class EstanteriaLLenaException extends Exception {

    //put your code 
    public function __construct($message, $code) {

        parent::__construct ($message, $code, null);
    }
    
    public function __toString() {
        
        return__CLASS__."  ".$this->message."<br>";
                
                
        
    }
    
}

    

