<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "petshop";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$nome = $_POST['Nome_cli'];
$idade = $_POST['Idade_cli'];
$email = $_POST['Email_cli'];

$query = "INSERT INTO clientes (Nome_cli, Idade_cli, Email_cli)
            VALUES('$nome','$idade','$email')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=home');
?>