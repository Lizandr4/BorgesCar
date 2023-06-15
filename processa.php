<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";

$result ="INSERT INTO cliente(nome,email,numero,mensagem) VALUES('$nome','$email','$numero','$mensagem')";
$resultado=mysqli_query($conexao, $result);


?>