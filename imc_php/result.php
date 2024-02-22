<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>

<header>
    <h1>Cálculo de IMC do Bebel</h1>
    <h2>De Gabryel "Bebel" Miranda dos Reis</h2>
    <h3>3º Ano de Informática</h3>
</header>
<hr>
<main>
<?php
    if(isset($_POST['nome'])){ //Esse if é opcional, mas é legal por para verificar se os dados foram
        $nome = $_POST['nome'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
    }

    $imc = $peso/($altura*$altura);
    $format = number_format($imc, 2, '.', '');	

    echo "Nome: {$nome}<br>"; 
    echo "Seu IMC: {$format}<br>";

    echo "Segundo o seu IMC, você está ";

    if($imc < 17){
        echo "Muito abaixo do peso<br>";
    }
    else if($imc < 18.5){
        echo "Abaixo do peso<br>";
    }
    else if($imc < 25){
        echo "Peso ideal<br>";
    }
    else if($imc < 30){
        echo "Sobrepeso<br>";
    }
    else if($imc < 35){
        echo "Obesidade";
    }
    else if($imc < 40){
        echo "Obesidade severa";
    }
    else{
        echo "Obesidade mórbida";
    }
?>
</main>
<hr>
<footer>Desenvolvido no Instituto Federal IFSP Campus Guarulhos</footer>
</body>
</html>