<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<link rel="stylesheet" type="text/css" href="normalize.css">-->
    <link rel="stylesheet" href="estilo.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabi's calculator</title>
</head>
<body>
    <form input autocomplete="off" class="caja" action="calculadora.php" method="get">
        <h1>Fabi's calculator</h1>
        <input type="text" name="numero1" value="" placeholder="ingrese un número">
        <input type="text" name="numero2" value="" placeholder="ingrese otro número">
        <input type="submit" name="" value="RESPUESTA">
        <output type="number" name="">
    </form>
</body>
</html>

<?php
error_reporting (0);
if(isset($_GET['numero1']) && isset($_GET['numero2']) && is_numeric($_GET['numero1']) && is_numeric($_GET['numero2']));
{
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    echo $numero1 + $numero2;
}




?>
