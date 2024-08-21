<?php

require_once 'modelo/Producto.php';
require_once 'modelo/Proveedores.php';

$Producto = new Producto();
$Producto->Id=1;
$Producto->Nombre= 'Vinos';
$Producto->Codigo='22';
$Producto->Precio= 7000;
$Producto->Marca= 'Santa Julia';

$PROV1= new Proveedores ();
$PROV1->Id=1;
$PROV1->Nombre= 'Juan';
$PROV1->Cuil= 2045646546;
$PROV1->Direccion='Mitre 233'; 
$PROV1->Telefono= 341523552;

$PROV2= new Proveedores ();
$PROV2->Id=2;
$PROV2->Nombre='Pedro';
$PROV2->Cuil=204565855;
$PROV2->Direccion='San luis 456';
$PROV2->Telefono=49952555;

$PROV3= new Proveedores ();
$PROV3->Id=3;
$PROV3->Nombre='Pablo';
$PROV3->Cuil=20552285;
$PROV3->Direccion='Sarmiento 788';
$PROV3->Telefono=45562158;

$Producto->ListaProveedores[]=$PROV1;
$Producto->ListaProveedores[]=$PROV2;
$Producto->ListaProveedores[]=$PROV3;

$Producto->MostrarInformacion();