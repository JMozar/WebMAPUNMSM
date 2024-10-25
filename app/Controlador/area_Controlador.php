<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

session_start(); // Me permite iniciar una sesión
require_once "../../util/ConexionBD.php";
//require_once '../../dao/AreaDao.php';
require_once '../../bean/AreaBean.php';

$op = $_REQUEST['op'];

switch ($op) {
    case 1: { // Mostrar
            //$objAreaDao = new AreaDao();
            //$lista = $objAreaDao->ListarAreas();
            //$_SESSION['LISTA'] = $lista; // Estoy guardado en sesión;
            header('Location:../vista/frm_areas.php');

            break;
        }

    
}
?>
