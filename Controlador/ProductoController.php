<?php
class ProductoController{
    
    //private $servicio;

    public function __construct(){
        //Aquí creamos la contrucción al objeto del Servicio

    }

    public function listarProducto(){
        // Usar el atributo servicio y traerse los datos de BBDD para mostrarlo en la Vista

    }

    public function ejecuta(){
        $productos = $this->listarProducto();

        //Cargar la vista y guarda los productos
        require_once("Vista/Main.php")

    }


}


