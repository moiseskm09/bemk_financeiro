<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Autenticação - BEMK Financeiro</title>
  </head>
  <body>
      
      <div class="container-fluid" id="container">
          <div class="row">
              <div class="h-100 justify-content-center align-items-center col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <div id="caixa-login">
                      <div class="text-center logo mb-3">
                          <img src="img/logo_horizontal.png" height="100">
                      </div>
                      <div class="apresentacao text-center text-dark">
                          <h4>Bem Vindo</h4>
                          <h6>Infome os dados de acesso</h6>
                      </div>
                      <div class="formulario text-center">
                          <form action="ferramentas/login.php" method="POST">
                          <div class="input-group mb-3">
                              <input type="text" name="usuario" class="form-control tamanhoInput" placeholder="Usuário" aria-label="Usuário" aria-describedby="basic-addon1" autocomplete="off" required>
                          </div>
                              <div class="input-group mb-3">
                                  <input type="password" name="senha" class="form-control tamanhoInput" placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon1" autocomplete="off" required>
                          </div>
                              
                              <div class="input-group mb-3">
                                  <input type="submit" class="form-control tamanhoInput btn btn-dark" value="Entrar">
                          </div>
                          </form>
                          
                           <div class="apresentacao text-center text-dark">
                               <p><a href="ferramentas/esqueciasenha.php" class="text-dark">Esqueceu a senha?</a></p>
                               <p>Ainda não tem cadastro? <a href="#modalcadstro" class="text-dark font-weight-bold">Clique aqui</a></p>
                      </div>
                          
                      </div>
                  </div>
              </div>
          </div>
      </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>