<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 Par ou Impar</title>
</head>
<body>
 <form method= "POST" action="">
<!--POST envia dados-->
<!-- GET procura dados -->
 <label for="numero"> Digite um número:</label>
    <input type="numero" id="numero" name="numero" required>
    <button type="submit" name="verificar_num_perfeito">Verificar</button>
 </form>   
 <?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST') 
if(isset($_POST['verificar_num_perfeito'])) {
    $numero = $_POST['numero'];
    $b = 0 ;
    for($i = 1; $i <= $numero; $b = $b + $i, $i++) {
        if($numero % $i == 0){
            echo "$i são divisores = 0 <br>";
            
        }
    }
    if($b === $numero){
        echo "O número $numero é <strong>perfeito</strong>.";
    }
    else{
        echo "O número $numero não é <strong>perfeito</strong>.";
}
 }
 ?>
</body>
</html>