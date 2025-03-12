<?php

#Cabeçalho
include 'header.php';

$pagina = $_GET['pagina'];

switch ($pagina) {

    case 'home' : include 'view/home.php'; break;
    case 'contatos' : include 'view/contacts.php'; break;
    default : include 'view/home.php';
    break;
}

#Rodapé
include 'footer.php';