<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculobr</title>
</head>
<body>

</body>
<?php

$nome = $_GET['nome'];
$idade = $_GET['idade'];
$sexo = $_GET['sexo'];

if ($idade < 25 && $sexo === "feminino"){
    echo "<h3>aprovado</h3>";
}
else {
    echo "<h3>reprovado</h3>";
}
?>
</html>