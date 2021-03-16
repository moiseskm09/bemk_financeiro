<?php
include_once 'config_geral.php';
require_once 'conexao.php';

$usuario= $_POST['usuario'];
$senha= sha1($_POST['senha']);

$sql = mysqli_query ($conexao,"SELECT id, usuario, senha, nome, sobrenome FROM usuarios WHERE usuario='$usuario' and senha='$senha'");

if (mysqli_num_rows($sql) > 0) {
        $resultado = mysqli_fetch_assoc ($sql);
        
	session_start();
	$_SESSION['usuario']=$usuario;
	$_SESSION['senha']=$senha;
	$_SESSION['nome']=$resultado['nome'];
        $_SESSION['sobrenome']=$resultado['sobrenome'];
        $_SESSION['id']=$resultado['id'];
        $id = $resultado['id'];
	header("Location: ../sistema/home");
$sql_log = mysqli_query($conexao, "INSERT INTO log_login (id_usuario, data_login, logado) VALUES ('$id', '$DATA', '1')");
        
} else{
	header("location: ../index?erro=1");
        

}