<?php require_once "functions.php";

if(isset($_POST['acessar'])){
    login($connect);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Acesso ao Site</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Painel de Login</legend>
            <input type="email" name="email" placeholder="Informe seu email" require>

            <input type="password" name="senha" placeholder="Insira sua senha" require>

            <input type="submit" name="acessar" value="acessar">
        </fieldset>    

    </form>
    



    
</body>
</html>