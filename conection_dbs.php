<?php
    class Conection_dbs{
        #Parametros:
        #Variable del Hosting de la base de datos.
        protected static string $db_host = "";
        #Variable del Usuario de la base de datos.
        protected static string $db_user = "";
        #Variable del Password de la base de datos.
        protected static string $db_pass = "";
        #Variable del Nombre  de la base de datos.
        protected static string $db_name = "";
        #Variable de la conexión a la base de datos.
        protected static $db_conection;

        #Constructor de la clase
        function __construct(){
            #Establecer los parametros de la Conexión.
            self :: set_db_host();
            self :: set_db_user();
            self :: set_db_pass();
            self :: set_db_name();
            self :: set_db_conection();
        }
        #Metodos para establecer los parametros:
        #Establece el Hosting de la base de datos.
        function set_db_host(){
            self :: $db_host = "localhost";
        }
        #Establece el Usuario de la base de datos.
        function set_db_user(){
            self :: $db_user = "jolu";
        }
        #Establece el Password de la base de datos.
        function set_db_pass(){
            self :: $db_pass = "jolu";
        }
        #Establece el Nombre de la base de datos.
        function set_db_name(){
            self :: $db_name = "jolu_prueba";
        }
        #Establece la Conexion de la base de datos.
        function set_db_conection(){
            #Intentamos la conexión a la base de datos.
            try {
                /* Creamos un nuevo objeto Mysqli, para
                la conexión a la base de datos. */
                self :: $db_conection = new mysqli(
                    self :: get_db_host(),
                    self :: get_db_user(),
                    self :: get_db_pass(),
                    self :: get_db_name()
                );  
                echo "Conexión exitosa.";              
            } catch (RuntimeException $e) {
                echo $e;
            } 
        }

        #Metodos para obtener los parametros
        #Obtiene el Hosting para la base de datos.
        function get_db_host(){
            return self :: $db_host;
        }
        #Obtiene el Usuario para la base de datos.
        function get_db_user(){
            return self :: $db_user;
        }
        #Obtiene el Password para la base de datos.
        function get_db_pass(){
            return self :: $db_pass;
        }
        #Obtiene el Nombre para la base de datos.
        function get_db_name(){
            return self :: $db_name;
        }
        #Obtiene la Conexión a la base de datos
        function get_db_conection(){
            return self :: $db_conection;
        }
        #Cierra la Conexión a la base de datos.
        function close_db_conection(){
            try {
                if(isset(self :: $db_conection)){
                    self :: get_db_conection()->close();
                    echo "Cierre de conexión exitosa.";
                }
            } catch (Exception $e){
                echo "Error al cerrar Conexión.";
            }
        }

    }
?>