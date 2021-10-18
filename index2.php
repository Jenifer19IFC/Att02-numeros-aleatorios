<!DOCTYPE html>
<?php
$opuser = isset($_POST['opuser']) ? $_POST['opuser'] : 0;
$comp = rand(1, 3);
$win = " ";

if($comp == 1)
    if($opuser == 1)
        $win = "EMPATE!";
    else if($opuser == 2)
        $win = "USUÁRIO VENCEU!";
    else if($opuser == 3)
        $win = "COMPUTADOR VENCEU!";
    else 
        $win = "ERRO!";

else if($comp == 2)
    if($opuser == 1)
        $win = "COMPUTADOR VENCEU!";
    else if($opuser == 2)
        $win = "EMPATE!";
    else if($opuser == 3)
        $win = "USUÁRIO VENCEU!";
    else 
        $win = "ERRO!";

else if($comp == 3)
    if($opuser == 1)
        $win = "USUÁRIO VENCEU!";
    else if($opuser == 2)
        $win = "COMPUTADOR VENCEU!";
    else if($opuser == 3)
        $win = "EMPATE!";
    else 
        $win = "ERRO!";
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo Pedra, Papel, Tesoura</title>
</head>
<body>
<?php include "menu.php";?>
    <h1>Jogo Pedra, Papel, Tesoura</h1>
    <form action="" method="POST">
        Qual a sua escolha?<br>
        <br>
        <input type="radio" name="opuser" id="opuser" value="1">Pedra<br>
        <input type="radio" name="opuser" id="opuser" value="2">Papel<br>
        <input type="radio" name="opuser" id="opuser" value="3">Tesoura<br> 
        <br>
        <input type="submit" value="JOGAR">    
    </form>
    <br>
    Usuário:
    <br>
    <?php echo "<img src='img/maos/$opuser.png' alt=''>";?>
    <br>
    <br>
    Computador: 
    <br>
    <?php echo "<img src='img/maos/$comp.png' alt=''>";?>
    <br>
    <?php echo $win; ?>
</body>
</html>