<?php 
session_start();
if(!isset($_GET['nomproduit'])){
    header('location: ../pages/Liste.php');
}
if (!isset($_SESSION['pannier'])) {
    $_SESSION['pannier'] = array();
}

$pannier[] = $_GET['nomproduit'];

?>