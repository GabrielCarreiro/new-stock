<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/create-product.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand ml-5" href="#">New Stock</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cadastrar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="cadastrar-produto.php">Produto</a>
                        <a class="dropdown-item" href="cadastrar-marca.php">Marca</a>
                        <a class="dropdown-item" href="cadastrar-categoria.php">Categoria</a>                   
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="carrinho.php">Carrinho</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
    <section >
        <div class="mx-auto">
            <form action="controller/produtos-cadastrar.php" method="POST">
                <div class="form-group">               
                    <label for="nome">Nome Do Produto</label>
                    <input type="text"name="nome" class="form-control">
                </div>
                <div class="form-group">
                    <label for="produto">Categoria Do Produto</label>
                    <select name="categoria" id="produto" class="form-control" >
                    <option value="">Selecione uma categoria</option> 
                        <?php
                        require_once('controller/conexao.php');
                        $resultado = $mysqli->query("SELECT * FROM categoria");                                                              
                        if(count($resultado)){
                            foreach ($resultado as $res) {
                        ?>                                           
                            <option  value="<?php echo $res['IDCATEGORIA'];?>" ><?php echo $res['DESCRICAO'];?></option> 
                        <?php      
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="marca">Marca Do Produto</label>
                    <select name="marca" id="marca" class="form-control">
                    <option value="">Selecione uma marca</option>
                        <?php
                        require_once('controller/conexao.php');
                        $resultado = $mysqli->query("SELECT * FROM marca");                                                              
                        if(count($resultado)){
                            foreach ($resultado as $res) {
                        ?>                                             
                            <option  value="<?php echo $res['IDMARCA'];?>" ><?php echo $res['DESCRICAO'];?></option> 
                        <?php      
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição Do Produto</label>
                    <input type="text"name="descricao" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Estoque</label>
                    <input type="number"name="estoque" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Preço</label>
                    <input type="number"name="preco" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary" id="btn"> Enviar </button>               
            </form>
        </div>
    </section>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>