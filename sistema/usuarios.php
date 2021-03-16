<?php 
require_once '../ferramentas/sessao.php';
require_once '../ferramentas/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
          <link href="../css/menu.css" rel="stylesheet" />
          <link href="../css/geral.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       <?php include_once "navbar.php";?>
        <div id="layoutSidenav">
            <?php include_once "menu.php";?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                       <!--conteudo da tela aqui!-->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2 class="titulo">Usuários</h2>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="mr-2">
                <button class="btn-sm botoes">Adicionar</button>
                <button class="btn-sm botoes">Exportar</button>
              </div>
            </div>
          </div>
                       <!--fim conteudo da tela aqui!-->
                </main>
                <?php include_once "rodape.php";?>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../js/chart-area-demo.js"></script>
        
    </body>
</html>
