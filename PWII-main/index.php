<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "petshop";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);
$query = "SELECT * FROM clientes";
$consulta_petshop = mysqli_query($conexao, $query);
?>

<?php

#Cabeçalho
include 'header.php';

$pagina = $_GET['pagina'];

switch ($pagina) {

    case 'home' : include 'view/home.php'; break;
    case 'cadastro' : include 'view/cadastro.php'; break;
    default : include 'view/home.php';
    break;
}
?>

<?php
#Rodapé
include 'footer.php';
?>
