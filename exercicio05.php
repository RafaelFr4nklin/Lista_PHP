<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05 verificar número amigo</title>
</head>
<body>
 <form method= "POST" action="">
<!--POST envia dados-->
<!-- GET procura dados -->
    <label for="numero"> Digite um número:</label>
    <input type="number"  name="num1" required><br></br>
    
    <label for="numero"> Digite um número:</label>
    <input type="number"  name="num2" required><br></br>
    <button type="submit" name="verificar">Enviar</button> 
</form>   
 <?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if(isset($_POST['verificar'])) {
    $num1 = $_POST['num1'] ;
    $num2 = $_POST['num2'] ;
   function somaDivisores($numero) {
    $soma = 0;

    for($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $soma = $soma + $i;
        }
    }
    return $soma;
   }
   $somaDivisores1 = somaDivisores($num1);
   $somaDivisores2 = somaDivisores($num2);

   if ($somaDivisores1 == $num2 && $somaDivisores2 == $num1) {
    echo "<p><strong>$num1</strong> e <strong>$num2</strong> são números amigos.</p>";
   } else {
    echo "<p><strong>$num1</strong> e <strong>$num2</strong> NÃO são números amigos.</p>";
   }
}
 }
 ?>
</body>
</html>