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
        <link href="../css/servicos.css" rel="stylesheet" />
        <link href="../css/geral.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include_once "navbar.php"; ?>
        <div id="layoutSidenav">
            <?php include_once "menu.php"; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <!--conteudo da tela aqui!-->
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h2 class="titulo">Serviços</h2>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="mr-2">
                                    <button class="btn-sm botoes">Adicionar</button>
                                    <button class="btn-sm botoes">Filtrar</button>
                                    <button class="btn-sm botoes">Exportar</button>

                                </div>
                            </div>
                        </div>
                        <!-- Bloco edição de servicos -->
                        <?php
                        if (isset($_POST['cod_servico_editado'], $_POST['servico_editado'], $_POST['valorHora_editado'])) {
                            $cod_servico_editado = $_POST['cod_servico_editado'];
                            $servico_editado = $_POST['servico_editado'];
                            $valorHora_editado = str_replace(",", ".", $_POST['valorHora_editado']);
                            $sql_edicao = mysqli_query($conexao, "UPDATE servicos SET servico = '$servico_editado', valor_hora = '$valorHora_editado' WHERE cod_servico = '$cod_servico_editado'");
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <h4 class="alert-heading">Uhuuu!</h4>
                                  <a href="#" class="close" data-dismiss="alert" aria-label="Close"><i class="fas fa-times"></i></a>
                                  <p class="mb-0">O serviço foi atualizado com sucesso.</p>
                                  </div>';
                        }
                        ?>
                        <!-- fim Bloco edição de servicos -->
                        <!-- Bloco desativação de servicos -->
                        <?php
                        if (isset($_POST['cod_servico_desativado'], $_POST['servico_desativado'])) {
                            $cod_servico_desativado = $_POST['cod_servico_desativado'];
                            $servico_desativado = $_POST['servico_desativado'];
                            $sql_desativacao = mysqli_query($conexao, "UPDATE servicos SET status_servico = '0' WHERE cod_servico = '$cod_servico_desativado'");
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <h4 class="alert-heading">Uhuuu!</h4>
                                  <a href="#" class="close" data-dismiss="alert" aria-label="Close"><i class="fas fa-times"></i></a>
                                  <p class="mb-0">O serviço foi desativado com sucesso.</p>
                                  </div>';
                        }
                        ?>
                        <!-- fim Bloco desativação de servicos -->
                        <div class="table-responsive">
                            <table class="table table-borderless table-sm">
                                <thead class="border thead-tabela">
                                    <tr>
                                        <th>Código Serviço</th>
                                        <th>Serviço</th>
                                        <th>Valor/Hora</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody class="border">
                                    <?php
                                    $sql_buscaServico = mysqli_query($conexao, "SELECT * FROM servicos WHERE status_servico = '1'");
                                    if (mysqli_num_rows($sql_buscaServico) > 0) {
                                        while ($resulta_buscaServico = mysqli_fetch_assoc($sql_buscaServico)) {
                                            ?>
                                            <tr class="linha-hover">
                                                <td><?php echo $resulta_buscaServico['cod_servico']; ?></td>
                                                <td><?php echo $resulta_buscaServico['servico']; ?></td>
                                                <td><?php echo str_replace(".", ",", $resulta_buscaServico['valor_hora']); ?></td>
                                                <td>       
                                                    <a href="#servico<?php echo $resulta_buscaServico['cod_servico']; ?>" data-toggle="modal" data-target="#servico<?php echo $resulta_buscaServico['cod_servico']; ?>" class="mr-3"><i class="fas fa-pencil-alt icone-editar"></i></a>
                                                    <!-- Modal edição-->
                                                    <div class="modal" id="servico<?php echo $resulta_buscaServico['cod_servico']; ?>" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content bg-light">
                                                                <div class="modal-header border-0 header-modal">
                                                                    <h5 class="modal-title">Edição de serviço</h5>
                                                                    <a href="" data-dismiss="modal" aria-label="Fechar"><i class="fas fa-times icone-desativar"></i></a>
                                                                    </button>
                                                                </div>
                                                                <form action="" method="POST">
                                                                    <div class="modal-body">
                                                                        <input type="hidden" name="cod_servico_editado" class="form-control" aria-describedby="basic-addon1" value="<?php echo $resulta_buscaServico['cod_servico']; ?>">
                                                                        <label for="servico_editado">Serviço</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" id="servico_editado" name="servico_editado" class="form-control tamanhoInput" aria-describedby="basic-addon1" value="<?php echo $resulta_buscaServico['servico']; ?>">
                                                                        </div>
                                                                        <label for="valorHora_editado">Valor/Hora</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" id="valorHora_editado" name="valorHora_editado" class="form-control tamanhoInput" aria-describedby="basic-addon1" value="<?php echo str_replace(".", ",", $resulta_buscaServico['valor_hora']); ?>">
                                                                        </div>  



                                                                    </div>

                                                                    <div class="modal-footer border-0">
                                                                        <button type="submit" class="botoes">Salvar mudanças</button>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal edição fim -->
                                                    <!-- Modal desativar fim -->
                                                    <a href="#desativar<?php echo $resulta_buscaServico['cod_servico']; ?>" data-toggle="modal" data-target="#desativar<?php echo $resulta_buscaServico['cod_servico']; ?>"><i class="fas fa-times icone-desativar"></i></a>
                                                    <!-- Modal desativação-->
                                                    <div class="modal" id="desativar<?php echo $resulta_buscaServico['cod_servico']; ?>" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content bg-light">
                                                                <div class="modal-header border-0 header-modal">
                                                                    <h5 class="modal-title">Desativar serviço</h5>
                                                                    <a href="" data-dismiss="modal" aria-label="Fechar"><i class="fas fa-times icone-desativar"></i></a>
                                                                    </button>
                                                                </div>
                                                                <form action="" method="POST">
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="cod_servico_desativado" class="form-control" aria-describedby="basic-addon1" value="<?php echo $resulta_buscaServico['cod_servico']; ?>">
                                                                        <label for="servico_desativado">Serviço</label>
                                                                        <div class="input-group">
                                                                            <input type="text" id="servico_desativado" name="servico_desativado" class="form-control tamanhoInput" aria-describedby="basic-addon1" value="<?php echo $resulta_buscaServico['servico']; ?>" readonly>
                                                                        </div>
                                                                </div>
                                                                <div class="modal-footer border-0">
                                                                    <button type="submit" class="botoes">Confirmar</button>

                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal desativar fim -->
                                                </td> 
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <tr class="linha-hover">
                                            <td colspan="4" class="text-center">Não há itens para exibir</td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                        <!--fim conteudo da tela aqui!-->
                </main>
                <?php include_once "rodape.php"; ?>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../js/chart-area-demo.js"></script>

    </body>
</html>
