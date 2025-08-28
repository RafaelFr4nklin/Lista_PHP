<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 06 Exibir todos os divisores de um número</title>
</head>
<body>
 <form method= "POST" action="">
<!--POST envia dados-->
<!-- GET procura dados -->
 <label for="numero"> Digite um número:</label>
    <input type="numero" id="numero" name="numero" required>
    <button type="submit" name="verificar_divisor">Verificar</button>
 </form>   
 <?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if(isset($_POST['verificar_divisor'])) {
    $numero = $_POST['numero'];
    for($i = 1; $i <= $numero; $i++){
        if($numero % $i == 0){
            echo "$i são divisores = 0 <br>";
        }
    }
}
 }
 ?>
</body>
</html>