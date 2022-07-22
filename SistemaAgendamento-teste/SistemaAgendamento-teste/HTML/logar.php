<?php
//OUTRA TENTATIVA DE LOGIN
if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){
    require 'conexao.php';
    require 'usuario.class.php';
    $u = new Usuario();
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if($u->login($email, $senha) == true){
        if(isset($_SESSION['IdUser'])){
        header("location: bemvindo.php");    
    } else{
        header("location: index.php");
    }
} else {
    header("location: index.php");
}}
?>