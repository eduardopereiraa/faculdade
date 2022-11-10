<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Calculadora</title>
</head>
<body>
<?php
    $buttons = [1,2,3,'+',4,5,6,'-',7,8,9,'*','C',0,'.','/','='];
    $precionado = '';
    if (isset($_POST['precionado']) && in_array($_POST['precionado'], $buttons)) {
        $precionado = $_POST['precionado'];
    }
    $armazenador = '';
    if (isset($_POST['armazenador']) && preg_match('#^(?:[\d.]+[*/+-]?)+$#', $_POST['armazenador'], $out)) {
        $armazenador = $out[0];  
    }
    $display = $armazenador . $precionado;
    $_SESSION['valores'] = $display;
    if ($precionado == 'C') {
        $display = '';
    } elseif ($precionado == '=' && preg_match('#^\d*\.?\d+(?:[/+-]\d\.?\d+)*$#', $armazenador)) {
        $display .= eval("return $armazenador;");
    }

    echo "<form action=\"\" method=\"POST\">";
        echo "<table style=\"width:300px;border:solid thick black;\">";
            echo "<tr>";
                echo "<td colspan=\"4\">$display</td>";
            echo "</tr>";
            foreach (array_chunk($buttons, 4) as $chunk) {
                echo "<tr>";
                    foreach ($chunk as $button) {
                        echo "<td",(count($chunk) != 4 ? " colspan=\"4\"" : "") , "><button name=\"precionado\" value=\"$button\">$button</button></td>";
                    }
                echo "</tr>";
            }
        echo "</table>";
        echo "<input type=\"hidden\" name=\"armazenador\" value=\"$display\">";
    echo "</form>";
?>

<div>
    <p>Números, operadores e resultados temporários</p>
    <?= $_SESSION['valores']; ?>
    
</div>
</body>
</html>