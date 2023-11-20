<?php 
session_start();
$idProduto = 0;

if(isset($_POST['visualizar-produto'])){
 $idProduto = $_POST['req_id'];
$_SESSION['req_id'] = $idProduto;
 print_r($_SESSION['req_id']);
 
header('Location: produto.php');
}


?>