<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php /*Faça uma página Web que pergunte em que turno você estuda. Peça para digitar M-matutino ou V-vespertino ou N- Nortuno. Imprima a mensagem "Bom Dia!","Boa tarde!" ou "Boa Noite!" ou Valor invalido!", conforme o caso*/ ?>
<form action="" method="get">
    turno : <input type="turno" name=""><br>

    <button type="submit">Testar</button>
    </form>
    <?php 
$turno = $_GET['turno'];

if ($turno == "M")
    echo "$turno matutino";

    else if ($turno == "V");
    echo "$turno vespertino";

    else if ($turno == "N");
    echo "$turno nortuno";

    else ($turno ==)





?>

</body>
</html>