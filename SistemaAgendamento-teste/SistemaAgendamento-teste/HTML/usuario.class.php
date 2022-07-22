<?php
//TENTATIVA DE LOGIN JUNTO COM O ARQUIVO LOGAR.PHP
class Usuario{
    public function login($email, $senha){
        global $pdo;

        $sql = "SELECT * FROM cliente WHERE email_cliente ='.$email.' AND senha_cliente = '.$senha.' ";
        $sql = $pdo->prepare($sql);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            echo $dado['id_cliente'];

            $_SESSION["id_cliente"] = $dado["id_cliente"];
            return true;
        } else {
            return false;
        }
    }
}
?>