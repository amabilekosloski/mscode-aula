<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="num1">Primeiro Número:</label>
        <input type="number" name="num1" required></input>
        <br><br>

        <label for="num2">Segundo Número:</label>
        <input type="number" name="num2" required></input>
        <br><br>

        <input type="submit" name="calcular" value="Somar">
    </form>

<?php 

$num1 = 0;
$num2 = 0; 
$resultado = 0;
$calcular = 'somar';

if (isset($_POST['num1'], $_POST['num2'], $_POST['calcular'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $calcular = $_POST['calcular'];

    $resultado = $num1 + $num2;

    echo "O resultado é: " . $resultado; 
};

?>

</body>
</html>