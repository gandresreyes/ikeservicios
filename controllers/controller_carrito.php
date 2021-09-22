<?php 
include_once("models/carrito.php");
include_once("conexion.php");
BD::crearInstancia();

    class ControladorCarrito{        

        
        public function inicio(){
            $productos = Productos::consultar();  
            include_once("views/carrito.php");
        }
       

    }
?>