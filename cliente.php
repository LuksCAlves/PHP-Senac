<?php 
require_once 'classes/cliente.class.php';
//instanciar a classe
$cliente1 = new Cliente();
$cliente2 = new Cliente();

$cliente1 -> validar('joao', 'joao@gmail.com');
// $cliente1 -> nome = "Aula de LTP2";
$cliente1 -> exibir();

$cliente2 -> validar('maria', 'maria@gmail.com');
$cliente2 -> exibir();
?>