<?php
    include("conexao.php");

    $usuario =$_POST['usuario'];
    $senha = $_POST['senha'];
    

    $sql = "INSERT INTO 'logins' ('usuario', 'senha') 
            VALUES ('$usuario', '$senha')";
       if(mysqli_query($conexao, $sql)){
        echo "Usuário cadastrado com sucesso!";
       }else{
        echo "Erro".mysqli_connect_error($conexao);
       }
       mysqli_close($conexao);


    /*$sql = "select count(*) as total from users where username = '$usuario'";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row['total'] == 1) {
        $_SESSION['usuario_existe'] = true;
        header('Location: cadastro.php');
        exit;
    }

    $sql = "INSERT INTO users (usuario, senha) VALUES ('$usuario', '$senha', NOW())";
   if($conexao->query($sql) === TRUE) {
      $_SESSION['status_cadastro'] = true;
   }
   $conexao->close();

   header('Location: cadastro.php');
   exit; 

   //atenção aqui

   <?php 
if(isset($_POST['submit']))
{
//print_t('Nome '.$_POST['usuario']);
//print_t('Senha '.$_POST['senha']);
include_once('config.php');
 $usuario = $_POST['usuario'];
 $senha = $_POST['senha'];

 $result = mysqli_query($conexao, "INSERT INTO users(usuario, senha)
 VALUES ($usuario,$senha)");
}
?>
  */

?> 


