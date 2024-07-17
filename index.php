<?php
    include_once("controller/usuario_controller.php");
    $usuarios = new Usuario_controller();
    $usuarios->close_db_conection();
?>