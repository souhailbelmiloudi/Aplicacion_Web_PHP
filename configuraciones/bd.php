<?php

class Bd{

  
    public static $instancia=null;
    public static function creaeInstancia(){
       
        if( !isset(self::$instancia) ){
            //manejo de errores
          
            $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instancia=new PDO('mysql:host=localhost;dbname=aplicacion','root','',$opciones);
            echo "conectado...";
        }

        return self::$instancia;
    }



}



?>