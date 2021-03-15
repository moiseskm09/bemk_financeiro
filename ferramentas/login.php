<?php
require_once 'conexao.php';

date_default_timezone_set('America/Sao_Paulo');

$usuario= $_POST['usuario'];
$senha= sha1($_POST['senha']);

$sql = mysqli_query ($conexao,"SELECT * FROM usuarios WHERE usuario='$usuario' and senha='$senha'");

if (mysqli_num_rows($sql) > 0) {
        $resultado = mysqli_fetch_assoc ($sql);
        
	session_start();
	$_SESSION['usuario']=$usuario;
	$_SESSION['senha']=$senha;
	$_SESSION['nome']=$resultado['nome'];
        
	header("Location: ../sistema/home.php");
        
} else{
	header("location: ../index.php?erro=1");
        

}