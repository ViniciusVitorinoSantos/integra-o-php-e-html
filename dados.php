<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="author" content="Vinícius Vitorino"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css" type="text/css">
    <title>Pegando dados do HTML com PHP</title>
</head>

<body>
<div>
    <form method="get" action="dados.php">
        Valor:<input type="text" name="v">
        <input type="submit" value="Calcular">

    </form>
<?php
$valor = $_GET["v"];
$resultado = sqrt($valor);
echo $resultado;
?>
</body>
</div>

</html>