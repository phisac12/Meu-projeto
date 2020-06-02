<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha  = md5(sha1($_POST['senha']));


$servidor = 'localhost';
$usuario  = 'root';
$senhaServidor    = '';
$banco    = 'cadastro';


$conexao = new mysqli($servidor, $usuario, $senhaServidor, $banco);

if ($conexao->connect_error){

    die('Conexao falhou' . $conexao->connect_error); 
}

$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if ($conexao->query($sql) === true){

    echo "Cadastrado com sucesso!";
}else{
    echo 'Erro ao inserir'. $conexao->error;
}

$conexao->close();
?>