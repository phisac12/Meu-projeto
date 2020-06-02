<?php


include_once('conexao.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$textarea = $_POST['textarea'];

$info = "INSERT INTO contato (nome, email, textarea) VALUES ('$nome', '$email', '$textarea')";

if($conexao->query($info) === true){

    echo "Congratulations sua mensagem foi enviada com sucesso!";

}else {

    echo "Ocorreu algum problema  de conexão";
}


?>