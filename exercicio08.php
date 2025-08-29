<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 08 pares entre 1 e o numero informado</title>
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
    
}
 }
 ?>
</body>
</html>