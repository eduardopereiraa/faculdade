<?php 
    include "conexao.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Duduzine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
    <body>
        <div class= "containter">
            <div class= "row-1" style= "color: white; background-image: linear-gradient(#D66D75, #E29587);; height:120px;">
            topo
            </div>
            <nav class="navbar navbar-expand-lg bg-light" style="background-image: linear-gradient(#D66D75, #E29587);">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="imagens/logo.jpg" style="width: 100px"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="flex-grow: 0">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    </div>
                </div>
            </nav>
            <div class="row">
                <div class="col-2" style="background-image: linear-gradient(#D66D75, #E29587);">
                    <?php
                    $sql = "SELECT * FROM meu_commerce.categorias WHERE categoria_pai is null";
                    $consulta = $conn->prepare($sql);
                    $consulta->execute();

                    foreach($consulta as $linha){?>
                        <a style="color: white" href="?categoria=<?php echo $linha['id'];?>">
                        <div class="item-menu"><?php echo $linha['descricao'];?></div>
                        </a> 
                        <?php
                            //listar as sub-categorias
                            $sql_itens = "SELECT * FROM meu_commerce.categorias WHERE categoria_pai = ".$linha['id'];
                            $subitens = $conn->prepare($sql_itens);
                            $subitens->execute();
                            foreach($subitens as $item){?>
                            - <a style="color: white" href="?categoria=<?php echo $item['id'];?>"><?php echo $item['descricao'];?></a><br>
                            <?php
                            }
                            }
                            ?>
                </div>
                <div class="col-10" style= "display: grid; grid-template-columns: 50% 50%; ">
                    <?php
                        if(isset($_GET['categoria'])){
                            $sql = "SELECT p.id as id_produto, p.categoria_id, p.imagem, p.descricao, p.resumo, c.categoria_pai, c.id as  id_categoria
                            FROM produtos p
                            INNER JOIN categorias c
                            ON p.categoria_id = c.categoria_pai OR p.categoria_id = c.id
                            WHERE p.categoria_id = {$_GET['categoria']} OR c.categoria_pai = {$_GET['categoria']}
                            ORDER BY RAND()";
                        }
                        else {
                            $sql = "SELECT p.id as id_produto, p.categoria_id, p.imagem, p.descricao, p.resumo FROM produtos p ORDER BY RAND()";
                        }
                        $consulta = $conn->prepare($sql);
                        $consulta->execute();                      
                        foreach($consulta as $linha){?>
                            <div class="card" style="width: 30rem; background-image: linear-gradient(#D66D75, #E29587); margin: 0 auto">
                                <img src="<?php echo $linha['imagem'];?>" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $linha['descricao'];?></h5>
                                    <p class="card-text"><?php echo $linha['resumo']?></p>
                                    <a href="#" class="btn btn-danger">Add Carrinho</a>
                                </div>
                            </div>
                            <?php
                              }
                             ?>
                </div>
            </div>
        </div>
        <div class="row-1" style= "background-image: linear-gradient(#D66D75, #E29587);">
                rodapé
        </div>
    </body>
</html>