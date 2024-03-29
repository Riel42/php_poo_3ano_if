<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo IMC</title>

    <style>
        body{
            text-align: center;
        }
        main{
            position: relative;
            padding: 10px;
            margin: 10px;
        }
        #duzentos{
            position: relative;
            width:200px;
            height:200px;
            border: dotted 2px black;
            margin: auto; /* Centraliza no centro */
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
        <div id="duzentos">
            <form action="result.php" method="post">
                <label for="">Nome: </label>
                <input type="text" name="nome" id="nome"><br><br>
                <label for="">Peso (kg): </label>
                <input type="text" name="peso" id="peso"><br><br>
                <label for="">Altura (m): </label>
                <input type="text" name="altura" id="altura"><br><br>
                <input type="submit" value="IMC">
            </form>
        </div>
    </main>
    <hr>
    <footer>Desenvolvido no Instituto Federal IFSP Campus Guarulhos</footer>
</body>
</html>