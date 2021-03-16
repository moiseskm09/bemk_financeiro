<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion fundo-menu" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                           <?php 
          $seleciona_menu = mysqli_query($conexao, "SELECT * from menu");
          while ($resultado = mysqli_fetch_assoc($seleciona_menu)) {
              $idMenu = $resultado["id"];
              ?>  
                            
                            <a class="nav-link link-menu" href="<?php echo $resultado['caminho'];?>">
                                <div class="sb-nav-link-icon"><i class="<?php echo $resultado['icone'];?> tamanho-icone"></i></div>
                                <?php echo $resultado['menu'];?>
                            </a>       
                  <?php  }   ?>           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer rodape-menu">
                        <div class="small">Usuário logado:</div>
                        <span class="usuario"><?php echo $NOME;?> </span> <span class="text-muted" style="font-size:15px"><?php echo $SOBRENOME;?><span
                    </div>
                </nav>
            </div>