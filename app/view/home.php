

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>cadastro de clientes</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css"> 
       
    </head>
    <body>

        <div class="container">

            <header>
                <div class="well">
                    <h1 class="text-center">Formulario Para Cadastro</h1>
                </div>
            </header>

            <!-- Form cadastrar -->
            <div style="margin: 100px 0; text-align: center">
                
                <?php
                   require_once '../model/clientes.php';  
                   require_once '../controller/script.php';
                ?>
                

                <legend>Formulário Cadastrar</legend>
                <form class="form-inline" method="post">
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-user"></span>
                        <input name="nome" type="text" class="form-control" required >
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">R$</span>
                        <input name="dividas" type="text" class="form-control">
                    </div>

                    <input name="cadastrar" type="submit" class="btn btn-success" value="Cadastrar">
                </form>
            </div>
            <!-- Fim form cadastrar -->


            <!-- Inicio da tabela -->
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="active">
                        <th>Nome</th>
                        <th>Dividas</th>
                        <th>Excluir / Alterar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuario->findAll() as $key => $value) { ?>
          
                    <tr>
                        <td> <?php echo $value->nome;?> </td>

                        <td> <?php echo $value->dividas;?> </td>

                        <td>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="load_modal('<?php echo $value->nome;?>', '<?php echo $value->dividas;?>', <?php echo $value->id;?>);">
                                Alterar</button>
                            
                            <form class="form_excluir" method="post" style="float: left; margin: 0 15px;">
                                <input name="id_ui" type="hidden" value="<?php echo $value->id;?>"/>
                                <button name="excluir_ui" type="submit" onclick="fn_exluir();" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>

                    </tr>
                    
                    <?php } ?>
                </tbody>
            </table>
            <!-- Fim da tabela -->

  

            <!-- Modal para alterar Usuário -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Alterando Usuário</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-inline" method="post">
                                <div class="input-group">
                                    <span class="input-group-addon glyphicon glyphicon-user"></span>
                                    <input id="text_nome" name="nome" type="text" class="form-control" required value="" >
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">R$</span>
                                    <input id="text_dividas" name="dividas" type="text" class="form-control">
                                </div>
                                <input id="id_uii" name="id_uii" type="hidden" value=""/>
                                <input name="alterar" type="submit" class="btn btn-warning" value="Alterar">
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- fim Modal -->




        </div> <!-- fim cantainer -->





        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-1.11.3.min.js" integrity="sha256-7LkWEzqTdpEfELxcZZlS6wAx5Ff13zZ83lYO2/ujj7g=" crossorigin="anonymous"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
 
 <script type="text/javascript">
 	 function fn_excluir(){
 	 	$('.form_excluir').submit(function(){
 	 		return confirm("Click OK para Continuar");
 	 	});
 	 }

 	 function load_modal(nome,dividas,id){
 	 	$('#text_nome').val(nome);
 	 	$('#text_dividas').val(dividas);
 	 	$('#id_uii').val(id);

 	 }
 </script>

    </body>
</html>