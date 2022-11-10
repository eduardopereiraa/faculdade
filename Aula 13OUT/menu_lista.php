<?php
    $sql = "SELECT * FROM meu_commerce.categorias WHERE categoria_pai is null";
    $consulta = $conexao->prepare($sql);
    $consulta->execute();
    foreach($consulta as $linha){?>
        <a href="?categoria=<?php echo $linha['id'];?>">
        <div class="item-menu"><?php echo $linha['descricao'];?></div>
        </a>
    <?php
    //listar as sub-categorias
    $sql_itens = "SELECT * FROM meu_commerce.categorias WHERE categoria_pai = ".$linha['id'];
    $subitens = $conexao->prepare($sql_itens);
    $subitens->execute();
    foreach($subitens as $item){?>
    - <a href="?categoria=<?php echo $item['id'];?>"><?php echo $item['descricao'];?></a><br>
    <?php
    }
    }
    ?>