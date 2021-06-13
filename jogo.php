<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.rtl.min.css">
    <title>Jogo General</title>
    <style type= "text/css">
       body {
           background-color: #99f2b1;
       }
       table{
           font-family: 'Verdana';
           background-color: white;
       }
       input{
           background-color: #57ad6e;
       }
       .title{
           background-color: #57ad6e;
       }
       .tab{
           padding-right: 60px;
       }
    </style>
    <?php
    $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
    $d1 =  '<img src="img/dado1.png">';
    $d2 = '<img src="img/dado2.png">';
    $d3 = '<img src="img/dado3.png">';
    $d4 = '<img src="img/dado4.png">';
    $d5 = '<img src="img/dado5.png">';
    $d6 = '<img src="img/dado6.png">';
    $j1 = 0;
    $j2 = 0;
    $j3 = 0;
    $j4 = 0;
    $j5 = 0;
    $j6 = 0;
    $jd1 = 0;
    $jd2 = 0;
    $jd3 = 0;
    $jd4 = 0;
    $jd5 = 0;
    $jd6 = 0;
    $trinca = 0;
    $trincaC = 0;
    $quadra = 0;
    $quadraC = 0;
    $fullhouse = 0;
    $fullhouseC = 0;
    $seqAlta = 0;
    $seqAltaC = 0;
    $seqBaixa = 0;
    $seqBaixaC = 0;
    $general = 0;
    $generalC = 0;
    $aleatorio = 0;
    $aleatorioC = 0;
    $c1 = 0;
    $c2 = 0;
    $c3 = 0;
    $c4 = 0;
    $c5 = 0;
    $c6 = 0;
    $cont1 = 0;
    $cont2 = 0;
    $cont3 = 0;
    $cont4 = 0;
    $cont5 = 0;
    $cont6 = 0;
    $contTr1 = 0;
    $contTr2 = 0;
    $contTr3 = 0;
    $contTr4 = 0;
    $contTr5 = 0;
    $contTr6 = 0;
    $contT1 = 0;
    $contT2 = 0;
    $contT3 = 0;
    $contT4 = 0;
    $contT5 = 0;
    $contT6 = 0;
    $contTg1 = 0;
    $contTg2 = 0;
    $contTg3 = 0;
    $contTg4 = 0;
    $contTg5 = 0;
    $contTg6 = 0;
    $contTG1 = 0;
    $contTG2 = 0;
    $contTG3 = 0;
    $contTG4 = 0;
    $contTG5 = 0;
    $contTG6 = 0;
    ?>
</head>
<body>
    <form action="" method="post">
    <div class="input-group input-group-lg">
        <span class="input-group-text" id="inputGroup-sizing-lg" style="background-color: #57ad6e">Jogador</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" 
        name="nome" id="nome" value="<?php echo $nome?>"><br>
        <input type="submit">
    </div>
    </form>
    <center> 
    <?php
    echo "$nome: <br>";
    $Jogador = array();
    for($i = 0; $i < 5; $i++){
        $Jogador[$i] = rand(1,6);
        if ($Jogador[$i] == 1) {
            echo "$d1 \n";
        }
        if ($Jogador[$i] == 2) {
            echo "$d2 \n";
        }
        if ($Jogador[$i] == 3) {
            echo "$d3 \n";
        }
        if ($Jogador[$i] == 4) {
            echo "$d4 \n";
        }
        if ($Jogador[$i] == 5) {
            echo "$d5 \n";
        }
        if ($Jogador[$i] == 6) {
            echo "$d6 \n";
        }
        $aleatorio += $Jogador[$i];
    }

    echo "<br><br>";

    echo "Computador: <br>";
    $Computador = array();
    for($i = 0; $i < 5; $i++){
        $Computador[$i] = rand(1,6);
        if ($Computador[$i] == 1) {
            echo "$d1 \n";
        }
        if ($Computador[$i] == 2) {
            echo "$d2 \n";
        }
        if ($Computador[$i] == 3) {
            echo "$d3 \n";
        }
        if ($Computador[$i] == 4) {
            echo "$d4 \n";
        }
        if ($Computador[$i] == 5) {
            echo "$d5 \n";
        }
        if ($Computador[$i] == 6) {
            echo "$d6 \n";
        }
        $aleatorioC += $Computador[$i];
    }

    foreach($Jogador as $dado){
        if($dado == 1){
            $cont1++;
        }
        elseif($dado == 2){
            $cont2++;
        }elseif($dado == 3){
            $cont3++;
        }elseif($dado == 4){
            $cont4++;
        }elseif($dado == 5){
            $cont5++;
        }elseif($dado == 6){
            $cont6++;
        }
        if($dado == 1){
            $contTr1++;
        }
        elseif($dado == 2){
            $contTr2++;
        }elseif($dado == 3){
            $contTr3++;
        }elseif($dado == 4){
            $contTr4++;
        }elseif($dado == 5){
            $contTr5++;
        }elseif($dado == 6){
            $contTr6++;
        }
        if($dado == 1){
            $contTg1++;
        }
        elseif($dado == 2){
            $contTg2++;
        }elseif($dado == 3){
            $contTg3++;
        }elseif($dado == 4){
            $contTg4++;
        }elseif($dado == 5){
            $contTg5++;
        }elseif($dado == 6){
            $contTg6++;
        }
    } 
    if($cont1 > 1){
        $j1 = $cont1; 
    }

    if($cont2 > 1){
        $j2 = $cont2*2; 
    }

    if($cont3 > 1){
        $j3 = $cont3*3; 
    }

    if($cont4 > 1){
        $j4 = $cont4*4; 
    }

    if($cont5 > 1){
        $j5 = $cont5*5; 
    }
    
    if($cont6 > 1){
        $j6 = $cont6*6; 
    }

    if ($contTr1 == 3 or $contTr2 == 3 or $contTr3 == 3 or $contTr4 == 3 or $contTr5 == 3 or $contTr6 == 3) {
        $trinca = 20;
    }
    if ($contTr1 == 4 or $contTr2 == 4 or $contTr3 == 4 or $contTr4 == 4 or $contTr5 == 4 or $contTr6 == 4) {
        $quadra = 30;
    }
    if ($contTg1 == 3) {
        if ($contTg2 == 2 or $contTg3 == 2 or $contTg4 == 2 or 
        $contTg5 == 2 or $contTg6 == 2) {
            $fullhouse = 25;
        }
    }   
    if ($contTg2 == 3) {
        if ($contTg1 == 2 or $contTg3 == 2 or $contTg4 == 2 or 
        $contTg5 == 2 or $contTg6 == 2) {
            $fullhouse = 25;
        }
    }
    if ($contTg3 == 3) {
        if ($contTg2 == 2 or $contTg1 == 2 or $contTg4 == 2 or 
        $contTg5 == 2 or $contTg6 == 2) {
            $fullhouse = 25;
        }
    }  
    if ($contTg4 == 3) {
        if ($contTg2 == 2 or $contTg3 == 2 or $contTg1 == 2 or 
        $contTg5 == 2 or $contTg6 == 2) {
            $fullhouse = 25;
        }
    }  
    if ($contTg5 == 3) {
        if ($contTg2 == 2 or $contTg3 == 2 or $contTg4 == 2 or 
        $contTg1 == 2 or $contTg6 == 2) {
            $fullhouse = 25;
        }
    }       
    if ($contTg6 == 3) {
        if ($contTg2 == 2 or $contTg3 == 2 or $contTg4 == 2 or 
        $contTg5 == 2 or $contTg1 == 2) {
            $fullhouse = 25;
        }
    }    
    if($dado == 2 and $dado == 3 and $dado == 4 and $dado == 5 and $dado == 6) {
        $seqAlta = 30;
    }
    if ($dado == 1 and $dado == 2 and $dado == 3 and $dado == 4 and $dado == 5) {
        $seqBaixa = 40;
    } 
    if ($contTr1 == 5 or $contTr2 == 5 or $contTr3 == 5 or $contTr4 == 5 or $contTr5 == 5 or $contTr6 == 5) {
        $general = 50;
    }   
    
    foreach($Computador as $dado){
        if($dado == 1){
            $c1++;
        }elseif($dado == 2){
            $c2++;
        }elseif($dado == 3){
            $c3++;
        }elseif($dado == 4){
            $c4++;
        }elseif($dado == 5){
            $c5++;
        }elseif($dado == 6){
            $c6++;
        }
        if($dado == 1){
            $contT1++;
        }
        elseif($dado == 2){
            $contT2++;
        }elseif($dado == 3){
            $contT3++;
        }elseif($dado == 4){
            $contT4++;
        }elseif($dado == 5){
            $contT5++;
        }elseif($dado == 6){
            $contT6++;
        }
        if($dado == 1){
            $contTG1++;
        }
        elseif($dado == 2){
            $contTG2++;
        }elseif($dado == 3){
            $contTG3++;
        }elseif($dado == 4){
            $contTG4++;
        }elseif($dado == 5){
            $contTG5++;
        }elseif($dado == 6){
            $contTG6++;
        }
    }
    if($c1 > 1){
        $jd1 = $c1; 
    }

    if($c2 > 1){
        $jd2 = $c2*2; 
    }

    if($c3 > 1){
        $jd3 = $c3*3; 
    }
    if($c4 > 1){
        $jd4 = $c4*4; 
    }
    if($c5 > 1){
        $jd5 = $c5*5; 
    }
    if($c6 > 1){
        $jd6 = $c6*6; 
    }
    if ($contT1 == 3 or $contT2 == 3 or $contT3 == 3 or $contT4 == 3 or $contT5 == 3 or $contT6 == 3) {
        $trincaC = 20;
    }
    if ($contT1 == 4 or $contT2 == 4 or $contT3 == 4 or $contT4 == 4 or $contT5 == 4 or $contT6 == 4) {
        $quadraC = 30;
    }
    if ($contTg1 == 3) {
        if ($contTg2 == 2 or $contTg3 == 2 or $contTg4 == 2 or 
        $contTg5 == 2 or $contTg6 == 2) {
            $fullhouse = 25;
        }
    }   
    if ($contTG2 == 3) {
        if ($contTG1 == 2 or $contTG3 == 2 or $contTG4 == 2 or 
        $contTG5 == 2 or $contTG6 == 2) {
            $fullhouseC = 25;
        }
    }
    if ($contTG3 == 3) {
        if ($contTG2 == 2 or $contTG1 == 2 or $contTG4 == 2 or 
        $contTG5 == 2 or $contTG6 == 2) {
            $fullhouseC = 25;
        }
    }  
    if ($contTG4 == 3) {
        if ($contTG2 == 2 or $contTG3 == 2 or $contTG1 == 2 or 
        $contTG5 == 2 or $contTG6 == 2) {
            $fullhouseC = 25;
        }
    }  
    if ($contTG5 == 3) {
        if ($contTG2 == 2 or $contTG3 == 2 or $contTG4 == 2 or 
        $contTG1 == 2 or $contTG6 == 2) {
            $fullhouseC = 25;
        }
    }       
    if ($contTG6 == 3) {
        if ($contTG2 == 2 or $contTG3 == 2 or $contTG4 == 2 or 
        $contTG5 == 2 or $contTG1 == 2) {
            $fullhouseC = 25;
        }
    }   
    if ($dado == 2 and $dado == 3 and $dado == 4 and $dado == 5 and $dado == 6) {
        $seqAltaC = 30;
    }
    if ($dado == 1 and $dado == 2 and $dado == 3 and $dado == 4 and $dado == 5) {
        $seqBaixaC = 40;
    }
    if ($contTG1 == 5 or $contTG2 == 5 or $contTG3 == 5 or $contTG4 == 5 or $contTG5 == 5 or $contTG6 == 5) {
        $generalC = 50;
    }   
    
    $TotalJ = $j1 + $j2 + $j3 + $j4 + $j5 + $j6 + $trinca + $quadra + $fullhouse + $seqAlta + $seqBaixa
    + $general + $aleatorio; 

    $TotalC = $jd1 + $jd2 + $jd3 + $jd4 + $jd5 + $jd6 + $trincaC + $quadraC + $fullhouseC + $seqAltaC + $seqBaixaC
    + $generalC + $aleatorioC;
    echo "<br><br><b>
    <table border='2'>
    <tr class='title'>
        <td class='tab'>Jogadas</td>
        <td class='tab'>$nome</td>
        <td>Computador</td>
    </tr>
    <tr>
        <td>Jogada 1</td>
        <td>$j1</td>
        <td>$jd1</td>
    </tr>
    <tr>
        <td>Jogada 2</td>
        <td>$j2</td>
        <td>$jd2</td>
    </tr>
    <tr>
        <td>Jogada 3</td>
        <td>$j3</td>
        <td>$jd3</td>
    </tr>
    <tr>
        <td>Jogada 4</td>
        <td>$j4</td>
        <td>$jd4</td>
    </tr>
    <tr>
        <td>Jogada 5</td>
        <td>$j5</td>
        <td>$jd5</td>
    </tr>
    <tr>
        <td>Jogada 6</td>
        <td>$j6</td>
        <td>$jd6</td>
    </tr>
    <tr>
        <td>Trinca</td>
        <td>$trinca</td>
        <td>$trincaC</td>
    </tr>
    <tr>
        <td>Quadra</td>
        <td>$quadra</td>
        <td>$quadraC</td>
    </tr>
    <tr>
        <td>Fullhose</td>
        <td>$fullhouse</td>
        <td>$fullhouseC</td>
    </tr>
    <tr>
        <td>Seq. Alta</td>
        <td>$seqAlta</td>
        <td>$seqAltaC</td>
    </tr>
    <tr>
        <td>Seq. Baixa</td>
        <td>$seqBaixa</td>
        <td>$seqBaixaC</td>
    </tr>
    <tr>
        <td>Aleatório</td>
        <td>$aleatorio</td>
        <td>$aleatorioC</td>
    </tr>
    <tr>
        <td>General</td>
        <td>$general</td>
        <td>$generalC</td>
    </tr>
    <tr>
        <td>Total</td>
        <td>$TotalJ</td>
        <td>$TotalC</td>
    </tr>
</table></b>";

    if($TotalJ > $TotalC) {
        echo "<b> $nome é o(a) vencedor(a)!! </b>";

    }elseif ($TotalC > $TotalJ) {
        echo "<b> Computador é o vencedor!!</b>";

    }else {
        echo "Empate!!";
    }
    ?>
    </center>
</body>
</html>