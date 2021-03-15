<?php

//verifica se a sessão é valida
session_cache_expire(3);
$cache_expire = session_cache_expire();

session_start();

session_regenerate_id();
// Define sessão para o usuário logado
$USUARIO = $_SESSION["usuario"];
$SENHA = $_SESSION["senha"];
$NOME = $_SESSION["nome"];
$SOBRENOME = $_SESSION["sobrenome"];
$ID = $_SESSION['id'];


if (!isset($USUARIO) || !isset ($SENHA) || !isset ($NOME)) {
	header("Location: ../index.php");
	exit;
} else {
}