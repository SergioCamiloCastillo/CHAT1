<?php
require('../MODEL/conexion.php');
require('../MODEL/curl.php');
if(isset($_GET['nombre']) && isset($_GET['mensaje'])){
    $con=new conectar();
    $con->conexion($_GET['nombre'],$_GET['mensaje']);
    $curl=new cu();
    $curl->curl($_GET['nombre'],$_GET['mensaje']);
}
