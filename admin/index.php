<?php session_start(); 
$seguranca = isset($_SESSION['ativa']) ? TRUE : header("location:login.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin</title>
</head>
<body>
    <?php if($seguranca) { ?>

        <h1>Painel Administrativo do site</h1>
        <h3>Bem Vindo,<?php echo $_SESSION['nome']; ?></h3>
        <a href="logout.php">Sair</a>

    
    <?php } ?>
    
    
</body>
</html>