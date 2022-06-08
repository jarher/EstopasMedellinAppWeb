<?php 
    require_once('./Controlador/Autoload.php');
    $autoload = new Autoload();
    
    $route = isset($_GET['r']) ? $_GET['r'] : 'home'; 
    $estopasmedellin = new Router($route);
?>
