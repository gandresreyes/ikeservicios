<?php

    class Productos{      
        public $id;
        public $nombre;
        public $descripcion;
        public $precio;
        public $imagen;
        public $bar;

        public function __construct($id, $nombre, $descripcion, $precio, $imagen){
            $this-> id =  $id;
            $this-> nombre =  $nombre;
            $this-> descripcion = $descripcion;
            $this-> precio = $precio;
            $this-> imagen = $imagen;
           
            
        }        
        public static function consultar(){
            $listaAproductos = []; 
            $conexionBD = BD::crearInstancia();
            $sql = $conexionBD->query("SELECT * FROM productos");
            
            foreach($sql->fetchAll() as $producto){
                $listaAproductos[] = new Productos($producto['id'],$producto['nombre'],$producto['descripcion'], $producto['precio'], $producto['imagen']);

            }
            return $listaAproductos;            

        }
        public static function addcarrito($idSesion, $idProducto){            
            $conexionBD = BD::crearInstancia();
            $sql = $conexionBD->prepare("INSERT INTO carrito_usuarios(id_session,id_producto) VALUES (?,?) ");
            $sql->execute(array($idSesion,$idProducto ));

        }
        public static function consultar_carrito($idSesion){           
            
            $conexionBD = BD::crearInstancia();              
            $nRows = $$conexionBD->query('SELECT count(*) from productos')->fetchColumn(); 
            return $nRows ;
        }
        
    }
?>