<?php

$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "projeto_admin";

//conexão com  o Banco de Dados

$connect = mysqli_connect( $host, $db_user, $db_pass, $db_name );

//isset - se existe , !empty - se não esta vazio

function login($connect){
    if(isset($_POST['acessar']) AND !empty($_POST['email']) AND !empty($_POST['senha'])) {
        
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        $senha = sha1($_POST['senha']);

        $query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";

        $executar = mysqli_query($connect, $query);

        $return = mysqli_fetch_assoc($executar);

        if(!empty($return['email'])){
            //echo "Bem Vindo" . $return['nome'];
            session_start();
            $_SESSION['nome'] = $return['nome'];
            $_SESSION['id'] = $return['id'];
            $_SESSION['ativa'] = TRUE;
            header("location: index.php");
        }else{
            echo "Usuario ou senha nao encontrado!";
        }
    }
} 
//Criar funcao logout
function logout(){
    session_start();
    session_unset();
    session_destroy();
    header("location: login.php");

}

?>