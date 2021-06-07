<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo General</title>
    <?php
    $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
    $d1 =  '<img src="img/dado1.png">';
    $d2 = '<img src="img/dado2.png">';
    $d3 = '<img src="img/dado3.png">';
    $d4 = '<img src="img/dado4.png">';
    $d5 = '<img src="img/dado5.png">';
    $d6 = '<img src="img/dado6.png">';
    ?>
</head>
<body>
    <center>
    <form action="" method="post">
        Jogador: <input type="text" name="nome" id="nome" value="<?php echo $nome?>"><br><br>
        <input type="submit"><br><br>
    
    <?php
    echo "$nome: <br>";
    $dados = array("$d1", "$d2", "$d3", "$d4", "$d5", "$d6", 
    "$d1", "$d2", "$d3", "$d4", "$d5", "$d6", "$d1", "$d2", "$d3", "$d4", "$d5", "$d6",
    "$d1", "$d2", "$d3", "$d4", "$d5", "$d6", "$d1", "$d2", "$d3", "$d4", "$d5", "$d6");
    $randnum = array_rand($dados, 5);
    echo $dados[$randnum[0]] . "\n";
    echo $dados[$randnum[1]] . "\n";
    echo $dados[$randnum[2]] . "\n";
    echo $dados[$randnum[3]] . "\n";
    echo $dados[$randnum[4]] . "\n";

    echo "<br><br>";

    echo "Computador: <br>";
    $dadosC = array("$d1", "$d2", "$d3", "$d4", "$d5", "$d6", 
    "$d1", "$d2", "$d3", "$d4", "$d5", "$d6", "$d1", "$d2", "$d3", "$d4", "$d5", "$d6",
    "$d1", "$d2", "$d3", "$d4", "$d5", "$d6", "$d1", "$d2", "$d3", "$d4", "$d5", "$d6");
    $randnum = array_rand($dadosC, 5);
    echo $dadosC[$randnum[0]] . "\n";
    echo $dadosC[$randnum[1]] . "\n";
    echo $dadosC[$randnum[2]] . "\n";
    echo $dadosC[$randnum[3]] . "\n";
    echo $dadosC[$randnum[4]] . "\n";
    ?>
    </center>
    </form>
</body>
</html>