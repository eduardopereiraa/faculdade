<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Duduzine</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <div class="container" style="max-width: 100vw !important; padding-right: 0px; padding-left: 0px;">
  <nav class="navbar navbar-expand-lg bg-light" style="background-image: linear-gradient(#D66D75, #E29587);">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="imagens/logo.jpg" style="width: 100px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent" style="flex-grow: 0">
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
              <button class="btn btn-outline-danger" type="submit">Procurar</button>
            </form>
        <div class="col" >
          <?php include 'menu_horizontal.php'; ?>
        </div>
      </div>
    </nav>
    </div>
    <div class="row">
      <div class="col-3" style="background-image: linear-gradient(#D66D75, #E29587);">
        <?php include 'categorias.php'; ?>
      </div>
      <div class="col-9"  style="background-image: linear-gradient(#D66D75, #E29587);margin-right: -103px;">
        <?php if (isset($_GET['pagina'])) {
          if ($_GET['pagina'] == 'produtos') {
            include 'produto_home.php';
          }
          if ($_GET['pagina'] == 'produto') {
            include 'produto_detalhe.php';
          }
          if ($_GET['pagina'] == 'sacola') {
            include 'sacola.php';
          }
          if ($_GET['pagina'] == 'meus_pedidos') {
            include 'meus_pedidos.php';
          }
          if ($_GET['pagina'] == 'realizar_pedido') {
            if (!isset($_SESSION['autenticado'])) {
              include 'login.php';
            } else {
              include 'realizar_pedido.php';
            }
          }
        } else {
          include 'produtos_destaque.php';
        } ?>
      </div>
    </div>
    <div class="row" style="background-image: linear-gradient(#D66D75, #E29587);">
     Contatos - GitHub @eduardopereiraa
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
  </script>
</body>

</html>