<?php

require_once 'Soma.php';
require_once 'Subtracao.php';
require_once 'Multiplicacao.php';
require_once 'Divisao.php';

$resultado = "";

if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacao'])) {
    $n1 = (float) $_POST['num1'];
    $n2 = (float) $_POST['num2'];
    $operacao = $_POST['operacao'];

    if ($operacao == "soma") {
        $obj = new Soma();
    } elseif ($operacao == "subtracao") {
        $obj = new Subtracao();
    } elseif ($operacao == "multiplicacao") {
        $obj = new Multiplicacao();
    } elseif ($operacao == "divisao") {
        $obj = new Divisao();
    }

    $resultado = $obj->calcular([$n1, $n2]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

<form method="post">
    Número 1: <input type="number" step="any" name="num1" required><br><br>
    Número 2: <input type="number" step="any" name="num2" required><br><br>

    Operação:
    <select name="operacao">
        <option value="soma">Somar</option>
        <option value="subtracao">Subtrair</option>
        <option value="multiplicacao">Multiplicar</option>
        <option value="divisao">Dividir</option>
    </select><br><br>

    <button type="submit">Calcular</button>
</form>
    
</body>
</html>

<?php
if ($resultado !== "") {
    echo "<h3>Resultado: $resultado</h3>";
}
?>
