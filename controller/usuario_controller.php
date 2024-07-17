<?php
    #Incluimos la clase para heredarla
    include_once("conection_dbs.php");
    class Usuario_controller extends Conection_dbs{
        #Constructor de la clase hija
        function __construct(){
            #Constructor de la clase padre
            parent::__construct();
        }
    }
?>