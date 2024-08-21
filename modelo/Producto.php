<?php

class Producto {

    public $Id;
    public $Nombre;
    public $Codigo;
    public $Precio;
    public $Marca;
    public $ListaProveedores = array();

    public function MostrarInformacion(){


        echo 'Id del producto:'. $this->Id . '<br>';
        echo 'Nombre del producto: '. $this->Nombre. '<br>';
        echo 'Codigo del producto: '. $this->Codigo. '<br>';
        echo 'Precio del producto: '. $this->Precio. '<br>';
        echo 'Marca del producto: '. $this->Marca. '<br>';
        echo'<br>';
        echo '-------------------------------------------<br>';
        echo 'Proveedores: <br>';
        echo '-------------------------------------------<br>';
        foreach($this->ListaProveedores as $Proveedores){

            echo'<br>';
            echo 'Id: '.$Proveedores->Id. '<br>';
            echo'<br>';
            echo 'Nombre: '.$Proveedores->Nombre. '<br>';
            echo 'Cuil: '.$Proveedores->Cuil. '<br>';
            echo 'Direccion: '.$Proveedores->Direccion. '<br>';
            echo 'Telefono: '.$Proveedores->Telefono. '<br>';
        }



    }
}