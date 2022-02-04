<?php
    $valor = (int) 0;
    $cont = (int) 0;

    if(isset($_POST['btnCalc'])) {
        $valor = $_POST['txtNumero'];
        //Exemplo utilizando WHILE
        while($cont <= $valor) {
            echo($cont. '<br>');
            // $cont = $cont + 1;
            // $cont+=1;
            $cont++;
        }
    }
?>

<!DOCTYPE html>
<html lang=pt-BR>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="frmRepeticao" method="post" action="index.php">
    <p>Digite um número: </p>
        <input type="text" name="txtNumero">
        <input type="submit" name="btnCalc" value="Calcular">
    </form>
</body>
</html>