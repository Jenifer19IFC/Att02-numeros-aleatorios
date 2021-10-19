<!DOCTYPE html>
<?php
    $usernum = isset($_POST['usernum']) ? $_POST['usernum'] : 0;
    $userpi = isset($_POST['userpi']) ? $_POST['userpi'] : 0; 
    $comp = " ";
    $nums = rand(0, 10);
    $parimpar = 0;
    $soma = $usernum + $nums;
    $pi = 0;
    $win = " ";
    $user = " ";

    if($userpi == 0){
        $parimpar = 1;
    }else if($userpi == 1){
        $parimpar == 0;
    }
    if($parimpar == 1){
        $comp = "ÍMPAR";
    }else if($parimpar == 0){
        $comp = "PAR";
    }
    if($userpi == 1){
        $user = "impar";
    }else if($userpi == 0){
        $user = "par";
    }
    if($soma % 2 == 0 ){
        $pi = 0;
    }else if($soma % 2 != 0){
        $pi = 1;
    }
    if($userpi == $pi){
        $win = "USUÁRIO VENCEU!";
    }else if($userpi != $pi){
        $win = "COMPUTADOR VENCEU!";
    }
   ?>     
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo do Par ou Ímpar</title>
</head>
<body>
<?php include "menu.php";?>
    <h1>Jogo do Par ou Ímpar</h1>
    <form action="" method="POST">
    <hr>
    <h3>Usuário, escolha o número desejado:</h3><br>
      <select name="usernum">
            <option value="0">0</option>
            <option value="1">1</option>         
            <option value="2">2</option>          
            <option value="3">3</option>           
            <option value="4">4</option>          
            <option value="5">5</option>           
            <option value="6">6</option>          
            <option value="7">7</option>           
            <option value="8">8</option>          
            <option value="9">9</option>           
            <option value="10">10</option>         
    </select> <br>
    <br>
    <input type="radio" name="userpi" id="userpi" value="0">Par<br>
    <input type="radio" name="userpi" id="userpi" value="1">Ímpar <br>
    <br>
    <input type="submit" value="JOGAR"><br>
    </form>
    <br>
    O computador escolheu:  
    <?php echo $comp;?>
    <br>
    Número escolhido pelo computador: 
    <br>
    <?php echo "<img src='img/$nums.png' alt=''>";?>
    <br>
    Número escolhido pelo usuário: 
    <br>
    <?php echo "<img src='img/$usernum.png' alt=''>";?>
    <br>
    <?php echo "Soma dos números ".$soma;?><br>
    <?php echo $win;?>
</body>
</html>