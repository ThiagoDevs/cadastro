<?php
         require_once '../view/home.php';


                    $usuario = new Usuarios();
                    
                    // Cadastro de Usuario
                    if ( isset($_POST['cadastrar']) ):
                        
                        $nome  = $_POST['nome'];
                        $dividas = $_POST['dividas'];
                        
                        $usuario->setNome($nome);
                        $usuario->setdividas($dividas);
                        
                        if ($usuario->insert()) {
                        
                        echo '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>OK!</strong> Incluido com sucesso!!! </div>';
                        
                    } else {
                        echo '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>OK!</strong> Erro ao alterar!!! </div>';
                    }
                    endif;
                    
                    
                    //exclusao de Usuario
                    if (isset($_POST['excluir_ui'])){
                        
                        $id = $_POST['id_ui'];
                        
                        $usuario->delete($id);
                        
                    }
                    
                    // Alterar Usuario
                    if ( isset($_POST['alterar']) ) {
                        $id    = $_POST['id_uii'];
                        $nome  = $_POST['nome'];
                        $dividas = $_POST['dividas'];
                        
                        $usuario->setNome($nome);
                        $usuario->setDividas($dividas);
                        
                        $usuario->update($id);
                        
                    }
                ?>

