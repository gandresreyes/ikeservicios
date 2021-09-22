<?php 
include_once("models/productos.php");
include_once("conexion.php");
BD::crearInstancia();

    class ControladorIndex{        

        public function productos(){
            $productos = Productos::consultar();             
            include_once("views/productos.php");
        }       
        public function carritoadd(){
            $pro=$_GET['id'];
            $idsesion = session_id();            
            Productos::addcarrito($idsesion, $pro);
            header('Location: http://localhost/ike/?controlador=carrito&accion=inicio');
            
                        
        }
      
        public function pagos(){

            if($_POST){
                print_r($_POST);
            }           
            include_once("views/pagos.php");
        }

    }
?>