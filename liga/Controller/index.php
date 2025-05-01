<?php
session_start();
include_once 'admin/config.php';
include_once '../clases/conexion.php';
include_once '../clases/seguridad.php';
include_once '../clases/header.php';

$vectorUsuario = Seguridad();

require '../views/index.view.php';
?>