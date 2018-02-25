<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include_once "Estanteria.php";
        include "Caja.php";
        
        $estanteria = new Estanteria(3);
        //try con cacht estanteria llena y dentro anadir 4 cajas (ObjcajaSorpresa2) y despues de la 1 comprobar el volumen
        //luego un echo lo que hay en la estanteria con echo $objestanteria
        //segundo try creas una 5 caja y en el catch se hace la llamada a la excepvion de la dimension
        
        try{
            
            $estanteria.anadirCaja($ObjcajaSorpresa1);
            echo"el volumen de la caja es".$ObjcajaSorpresa1.getVolumen();
            
            $estanteria.anadirCaja($ObjcajaSorpresa2);
            $estanteria.anadirCaja($ObjcajaSorpresa3);
            $estanteria.anadirCaja($ObjcajaSorpresa4);
            
            
            
        }  catch (EstanteriaLLenaException $ele){
            
            echo $ele;
        }
        
        
        try{
            
            $ObjcajaSorpresa5 = new CajaSorpresa(60 , 30 , 394 ,"azul" , "payaso");
            
        } catch (DimensionErroneaException $ex) {
            
            echo $ex;

        }
        
        ?>
    </body>
</html>
