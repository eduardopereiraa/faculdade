<?php 
    include "bibliotecas/conexao.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atividade 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12 bg-secondary p-3">Cabeçalho</div>
        </div>
        <div class="row">
            <div class="col-2 bg-secondary p-3">
               <?php include "menu.php" ?>
            </div>
            <div class="col-10">
                <?php 
                    if(isset($_GET['pagina'])) {
                        include $_GET['pagina'].".php";
                    } else {
                        include "home.php";
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-secondary p-3 text-center">
                @DevBSN 2022

            </div>
        </div>
    </div>      
  </body>
</html>
