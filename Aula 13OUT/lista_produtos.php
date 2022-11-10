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

        <div class="card" style="width: 18rem;">
            <img src="<?php echo $linha['imagem'];?>" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $linha['descricao'];?></h5>
                <p class="card-text"><?php echo $linha['resumo']?></p>

            </div>
        </div>
        <?php
    }
?>