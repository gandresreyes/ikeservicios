<?php

    class Productos{      
               
        public static function consultar(){            
            $conexionBD = BD::crearInstancia();
            $idSesion = session_id();
            $sql = $conexionBD->query("SELECT  id_producto, nombre, precio ,COUNT(id_producto) as cantidad,SUM(precio) as total
            FROM `carrito_usuarios` 
            LEFT JOIN productos ON productos.id = carrito_usuarios.id_producto 
            WHERE id_session LIKE '$idSesion'
            GROUP by id_producto
           " );
            $s  = $sql->fetchAll();           
            return $s;            

        }       
        
    }
?>