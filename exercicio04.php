<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04  Calcular o fatorial de um número</title>
</head>
<body>
 <form method= "POST" action="">
<!--POST envia dados-->
<!-- GET procura dados -->
 <label for="numero"> Digite um número:</label>
    <input type="numero" id="numero" name="numero" required>
    <button type="submit" name="verificar_par_impar">Verificar</button>
 </form>   
 <?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if(isset($_POST['verificar_par_impar'])) {
    $numero = $_POST['numero'];
    for($i = $numero - 1; $i >= 1; $i--){
        $numero = $numero * $i;
        
    }
    echo "O fatorial é $numero";
}
 }
 ?>
</body>
</html>