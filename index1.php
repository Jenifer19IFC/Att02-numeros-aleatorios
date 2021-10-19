<!DOCTYPE html>
<?php
    $user1 = rand(1, 6);
    $user2 = rand(1, 6);
    $comp1 = rand(1, 6);
    $comp2 = rand(1, 6);
    $user = $user1 + $user2;
    $comp = $comp1 + $comp2;
    $win= " ";

    if($user > $comp)
        $win = "USUÁRIO VENCEU!";
    else if($user < $comp)
        $win = "COMPUTADOR VENCEU!";
    else if($user == $comp)
        $win = "EMPATE!";
?>
<br>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Dados</title>
</head>
<body>
<?php include "menu.php";?>
    <h1>Jogo de Dados</h1>
<form action="" method="POST">
    <input type="submit" value="JOGAR">
</form>
    <br>
    Usuário:
    <br>
    <?php echo "<img src='img/dados/$user1.png' alt=''>";
          echo "<img src='img/dados/$user2.png' alt=''>"; ?>
    <br>
    <br>
    Computador:
    <br>
    <?php echo "<img src='img/dados/$comp1.png' alt=''>";
          echo "<img src='img/dados/$comp2.png' alt=''>";?>
    <br>
    <br>
    <?php echo "Soma dos dados do usuário: ".$user;?>
    <br>
    <?php echo "Soma dos dados do computador: ".$comp;?>
    <br>
    <br>
    <?php echo $win;?>
</body>
</html>