<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03 informar se +, - ou 0</title>
</head>
<body>
 <form method= "POST" action="">
<!--POST envia dados-->
<!-- GET procura dados -->
 <label for="numero"> Digite um número:</label>
    <input type="numero" id="numero" name="numero" required>
    <button type="submit" name="informar_estado">Verificar</button>
 </form>   
 <?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if(isset($_POST['informar_estado'])) {
    $numero = $_POST['numero'];
    //$i é o multiplicador, não precisa ser informado antes nesse caso
    for($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado <br>";
    }
}
 }
 ?>
</body>
</html>