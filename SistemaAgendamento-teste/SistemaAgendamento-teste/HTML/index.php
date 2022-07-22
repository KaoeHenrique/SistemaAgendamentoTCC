<?php
session_start();
require_once "conexao.php";
$pdo = conectar();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Prototipo</title>
    <script src="https://kit.fontawesome.com/52e3096c6b.js" crossorigin="anonymous"></script>
    <script src="../JS/modal.js"></script>
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/modal.css">
</head>
<body>
    <div class="grid">
        <header>
                <div class="logo">
                    <div class="img"></div>
                    <h1>NAILDESIGN</h1>
                </div>
                <div class="nav">
                    <hr>
                    <button class="nav-btn" onclick="startModal('show')">entrar</button>
                </div>
        </header>
        <div class="container-1">
            <div class="content">
                <h1>Cuide De Você</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan lobortis nisl, at vestibulum metus fringilla nec. Fusce nec odio condimentum, luctus tellus sed, placerat quam. Curabitur tincidunt aliquam urna. Aliquam dictum nibh ex, eu efficitur mi imperdiet a. Integer eu hendrerit urna, non interdum ligula. Vestibulum sed magna in justo luctus finibus a sollicitudin turpis. Fusce elementum interdum tempus. Curabitur tincidunt, ex a lobortis gravida, lectus libero mollis elit, vitae fringilla risus leo vitae felis.
                </p>
                <a href="#main"><button class="btn">agendar</button></a>
            </div>
        </div>
        <div class="container-2">
            <div class="grid">
                <div class="img1 banner"></div>
                <div class="img2 banner"></div>
                <div class="img3 banner"></div>
                <div class="img4 banner"></div>
            </div>
        </div>
        <div class="main" id="main">
            <div class="ini modal" id="modal">
                <div class="modal-content modal-register">
                    <div class="first-content">
                        <h2>Já Possuo Uma Conta</h2>
                        <p>Entrar utilizando seus dados já cadastrados</p>
                        <button id="login" class="btn" onclick="alterModal('login-js', 'register-js')">entrar</button>
        
                    </div>
                    <div class="second-content">    
                        <h2>Criar Uma Conta</h2>
                        
                       <p>Preencha os campos para criar uma nova conta</p>
                        <form method="POST">
                            <label class="label-input"for="">
                                <i class="fa-solid fa-user icon-input"></i>
                                <input type="text" name="nome" placeholder="  Seu nome">
                            </label>
                            <label class="label-input"for="">
                                <i class="fa-solid fa-phone icon-input"></i>
                                <input type="text" name="telefone" placeholder="  Número para contato">
                            </label>
                            <label class="label-input"for="">
                                <i class="fa-solid fa-at icon-input"></i>
                                <input type="email" name="email" placeholder="  Email para contato">
                            </label>
                            <label class="label-input"for="">
                                <i class="fa-solid fa-key icon-input"></i>
                                <input type="password" name="senha" placeholder="  Definir senha">
                            </label>
                            <label class="label-input"for="">
                                <i class="fa-solid fa-calendar-days icon-input"></i>
                                <input type="date" name="datanasc" placeholder="  Data de nascimento">
                            </label>
                            <label class="label-input"for="">
                                <i class="fa-solid fa-map-location icon-input"></i>
                                <input type="text" name="endereco" placeholder="  Endereço">
                            </label>
                            <button type="submit" name="btnSalvar" class="btn btn-primary">Enviar</button>
                        </form>
                        <!--<button type="submit" class="btn btn-principal" name="btnSalvar" onclick="alterModal('login-js', 'register-js')">cadastrar</button>-->
                    </div>
                </div>
                <div class="modal-content modal-login">
                    <div class="first-content">
                        <h2>Criar Uma<br>Nova Conta</h2>
                        <p>Cadastrar uma nova conta a partir dos seus dados</p>
                        <button id="register"class="btn" onclick="alterModal('register-js', 'login-js')">criar</button>
                    </div>
                    <div class="second-content">
                        <h2>Entrar</h2>
                        <p>Utilizar seus dados já cadastrados</p>
                        <form method="POST" action="bemvindo.php">
                            <label class="label-input"for="">
                                <i class="fa-solid fa-at icon-input"></i>
                                <input type="email" name="email" placeholder="  Seu email">
                            </label>
                            <label class="label-input"for="">
                                <i class="fa-solid fa-key icon-input"></i>
                                <input type="password" name="senha" placeholder="  Sua senha">
                                <button type="submit" name="BtnEntrar"> Entrar </button>
                            </label>
                        </form>
                        <!--<button class="btn" onclick="alterModal('service-js', 'login-js')">logar</button>!-->
                    </div>
                </div>
                <div class="modal-content modal-service">
                    <div class="first-content">
                        <button onclick="alterModal('login-js', 'service-js')"><i class="fa-solid fa-arrow-left-long fa-2xl arrow"></i> <h3>voltar</h3></button>

                        <h2>Profissionais</h2>
                    </div>
                    <div class="second-content">
                        <h2>Serviços</h2>
                        <p>selecione um serviço desejado</p>
                        <div class="service-list">
                            <form action="/action_page.php" class="service-list">
                                  <input type="radio" id="item1" name="serv" value="item1">
                                  <label for="item1" class="item-list">Corte de Cabelo</label>
                                  <input type="radio" id="item2" name="serv" value="item2">
                                  <label for="item2" class="item-list">Pintar a Unha</label>
                                  <input type="radio" id="item3" name="serv" value="item3">
                                  <label for="item3" class="item-list">Exteção de Cílios</label>
                                  <input type="radio" id="item4" name="serv" value="item4">
                                  <label for="item4" class="item-list">Fazer Sobrancelha</label>
                                  <input type="radio" id="item5" name="serv" value="item5">
                                  <label for="item5" class="item-list">Aplicar unhas de Gel5</label>
                                  <input type="radio" id="item6" name="serv" value="item6">
                                  <label for="item6" class="item-list">Exteção de Cílios6</label>
                                  <input type="radio" id="item7" name="serv" value="item7">
                                  <label for="item7" class="item-list">Exteção de Cílios7</label>
                                </form> 
                        </div>
                    </div>
                </div>

            </div>
                
        </div>
        <footer>
            
        </footer>
    </div>

</body>
</html>
<?php
//Conexao do banco de dados

//CADASTRO DO FORMULARIO

     if(isset($_POST['btnSalvar'])) {
    $nome = isset($_POST['nome'])? $_POST['nome'] : null;
    $telefone = isset($_POST['telefone'])? $_POST['telefone'] : null;
    $email = isset($_POST['email'])? $_POST['email'] : null;
    $senha = isset($_POST['senha'])? $_POST['senha'] : null;
    $datanasc = isset($_POST['datanasc'])? $_POST['datanasc'] : null;
    $endereco = isset($_POST['endereco'])? $_POST['endereco'] : null;

   $sql = "INSERT INTO cliente (nome_cliente, telefone_cliente, email_cliente, senha_cliente, data_nasc, endereco_cliente) VALUES (:n, :t, :e, :s, :d, :en);";
     //preparando o sql para receber os dados
    $stmt = $pdo->prepare($sql);
     //troca dos dados pelo que esta vindo no formulário
    $stmt->bindParam(':n', $nome);
    $stmt->bindParam(':t', $telefone);
    $stmt->bindParam(':e', $email);
    $stmt->bindParam(':s', $senha);
    $stmt->bindParam(':d', $datanasc);
    $stmt->bindParam(':en', $endereco);
    if ($stmt->execute()) {
        echo "Registro inserido com sucesso";
    }
     }
?>
<?php
//TENTATIVA DE LOGIN
if(isset($_POST["BtnEntrar"])){
    if($_POST[$email]=="" or $_POST[$senha]==""){
        echo "PORFAVOR DIGITE SEUS DADOS";
    } else{
        $query=$pdo->prepare("SELECT * FROM cliente WHERE email_cliente=? AND senha_cliente=?");
        $query->execute(array($email,$senha));
        $control=$query->fetch(PDO::FETCH_OBJ);
        if($control>0){
            $_SESSION["email"]=$email;
            header("Location:bemvindo.php");
        }
    }
}
?>

