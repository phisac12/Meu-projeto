<?php

include_once('conexao.php');
$emailLogin = $_POST['emailLogin'];
$senhaLogin = md5(sha1($_POST['senhaLogin']));



    $sql = "SELECT nome, email from usuario WHERE email = '$emailLogin' and senha = '$senhaLogin'";
    
    $res = $conexao->query($sql);

    if($res->num_rows > 0 ){ 

        $dados = mysqli_fetch_assoc($res);
        session_start();
        $_SESSION['izaker'] = $dados['nome'];
        header('Location:home.php');

    }else {

        echo 'Senha incorreta';


    }



   


?>
