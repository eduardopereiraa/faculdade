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
<form name="Cadastro" action="aulaGET.php" method="GET">
  <label>Nome do Aluno: </label>
  <input type="text" name="nome" size="30"><br>
  <label>Nota 1: </label>
  <input type="text" name="nota1" size="5"><br>
  <label>Nota 2: </label>
  <input type="text" name="nota2" size="5"><br>
  <input type="submit" name="enviar" value="Enviar">
</form>
</body>


<?Php
    $resultado=($_GET['num1'] + ['num2']);
    if ($resultado >= 7) {
        print("Aluno dudu aprovado com a média $resultado");
       }
       else {
        print("Aluno dudu reprovado com a média $resultado");
       }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form name="calcular" action="index.php" method="get"; >
    <input  type= "text" name= "num1" />
    <br/>       
    <input  type= "text" name= "num1" />
    <input type= "submit" name="enviar" />    
    </form>
    
</body>
</html>
*/