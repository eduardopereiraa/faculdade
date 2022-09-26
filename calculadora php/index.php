<?php
$media = ($_GET['nota1'] + $_GET['nota2']) / 2;
$nome = $_GET['nome'];
if ($media >= 7) {
 print("Aluno $nome aprovado com a média $media");
}
else {
 print("Aluno $nome reprovado com a média $media");
}
?>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title> Trabalhando com superglobal GET em PHP </title>
</head>
<body>
<h3>Formulário de Cálculos de Média</h3><br>
<form name="Cadastro" action="index.php" method="GET">
  <label>Nome do Aluno: </label>
  <input type="text" name="nome" size="30"><br>
  <label>Nota 1: </label>
  <input type="text" name="nota1" size="5"><br>
  <label>Nota 2: </label>
  <input type="text" name="nota2" size="5"><br>
  <input type="submit" name="enviar" value="Enviar">
</form>
</body>