<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 Par ou Impar</title>
</head>

<body>
    <form method="POST" action="">
        <!--POST envia dados-->
        <!-- GET procura dados -->
        <label for="numero"> Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="somar_divisores">Verificar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['somar_divisores'])) {
            $numero = $_POST['numero'];

            $divisor1 = [];
            $divisor = 0;

            for ($i = 1; $i < $numero; $i++) {
                if ($numero % $i == 0) {
                    $divisor1[] = $i;
                }
            }

            $soma1 = array_sum($divisor1);

            echo $soma1;
        }
    }
    ?>
</body>

</html>