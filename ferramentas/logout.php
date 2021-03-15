<?php
include_once 'config_geral.php';
require_once 'conexao.php';

session_start ();

$USUARIO = $_SESSION['usuario'];
$SENHA = $_SESSION['senha'];
$NOME = $_SESSION['nome'];
$SOBRENOME = $_SESSION['sobrenome'];
$ID = $_SESSION['id'];
$sql_log = mysqli_query($conexao, "UPDATE log_login SET logado = '0', data_fim_login = '$DATA' WHERE id_usuario = '$ID' AND logado = '1'");


session_destroy();


   
header ("Location: ../index.php");

?>