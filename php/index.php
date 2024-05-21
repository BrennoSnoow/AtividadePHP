<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculobr</title>
</head>
<body>

</body>
<?php

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$soma = $n1 + $n2;

if ($soma > 20) {
    echo "<h3>O Resulto é!: </h3>", $soma + 8;
}
else {
    echo "<h3>O resultado é!: </h3>", $soma - 5;
}
?>
</html>