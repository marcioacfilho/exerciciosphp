<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php /*Faça um script em PHP que verifique se uma algo digitada é um digito(número) ou caracter */ ?>

<form action="" method="get">
    Digite um caractere: <input type="text" name="carac"><br>
    <button type="submit">Testar</button>
</form>
<?php
$meuCaractere = $_GET['carac'];
if (ctype_digit($meuCaractere))
    echo "É dígito";
else
    echo "Não é dígito";

?>
</body>
</html>