<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CADASTRO RELIZADO!</title>
   <link rel="stylesheet" href="cadastrophp.css">

</head>
<body>
   <div class="main-login">
<p>Cadastro realizado com sucesso! <a href="pagina1.php">Clique aqui para realizar seu login</a></p>
</div>
</body>
</html>

<?php
    include("conexao.php");

    $usuario =$_POST['usuario'];
    $senha = $_POST['senha'];
    

    $sql = "INSERT INTO logins (usuario, senha) 
            VALUES ('$usuario', '$senha');";
       if(mysqli_query($conexao, $sql)){
        echo "Usuário cadastrado com sucesso!";
       }

    /*$sql = "select count(*) as total from users where username = ('$usuario')";
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

AGORA O CÓDIGO ESTÁ ASSIM:
<?php
    session_start();
    include("conexao.php");
    
    $username =$_POST['username'];
    $password= $_POST['password'];
     

    $sql_code= "select count(*) as total from logins where username = ('username')";
    $result = mysqli_query($conexao, $sql_code);
    $row = mysqli_fetch_assoc($result);
    if ($row['total'] > 0) {
      echo "$username exists!"; }else{
    $sql_code = "INSERT INTO logins (username, password) VALUES ('$username', '$password')";
      if(mysqli_query($conexao, $sql_code)){
        echo  "successful registration!";
        }}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>successful registration!</title>
   <link rel="stylesheet" href="cadastrophp.css">

</head>
<body>
   <div class="main-login">
<p><a href="pagina1.php">click here to sign up</a></p>
</div>

</body>
</html>

    

