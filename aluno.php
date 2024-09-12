<?php 
require_once 'classes/aluno.class.php';
//instanciar a classe
$aluno1 = new Aluno();
$aluno2 = new Aluno();

$aluno1 -> nome = 'Valdemir Silva';
$aluno1 -> email = 'valdemir.instrutor@gmail.com';

$aluno2 -> nome = 'Lucas Nobre';
$aluno2 -> email = 'Nobre@gmail.com';



echo "<pre>";
print_r($aluno1);
print_r($aluno2);
// var_dump($aluno1, $aluno2);

?>