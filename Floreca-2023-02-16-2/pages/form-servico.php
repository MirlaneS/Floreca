<?php
    require_once 'head.php';
    include_once 'conexao.php';

    $sql = "SELECT * from categoria";
    $resultado=$conn->prepare($sql);
    $resultado->execute();


?>

<form method="POST" action="control-serv.php" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Cadastro de procedimentos</h3>
                </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome">    
                </div>
            </div>           

            <div class="col-md-2">
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" name="descricao" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
            <!-- <div class="col-md-3">
                <div class="form-group">
                    <label for="valor">Preço</label>
                    <input type="text" name="valor" class="form-control" onchange="this.value = this.value.replace( /,/g, '.')">
                </div>
            </div> -->

            <div class="col-md-3">
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <select name="categoria" class="form-control">
                         
                        <?php

                            if (($resultado) and ($resultado->rowCount() !=0)) {
                                while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
                                  extract($linha);
                            
                        ?>

                        <option value="<?php echo $idcategoria;?>"> <?php echo $nomecategoria; ?> </option>

                        <?php
                                }
                            }
                        ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">    
            <div class="col-md-12 text-center">
                <input type="submit" class="btn btn-primary" name="btncad" value="Enviar">
            </div>
        </div>
</form>

<?php
    require_once 'footer-admin.php';
?>