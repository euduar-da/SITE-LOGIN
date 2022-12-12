<?php
   
   $servidor="localhost";
   $usuario="root";
   $senha="";
   $dbName="cadastroelogin";
   
   $conexao=mysqli_connect($servidor, $usuario, $senha, $dbName);
   if (!$conexao)
   {
      die ("Houve um erro: ".mysqli_connect_error());
   }
   else
   {
      echo "conexao efetuada com sucesso";
   }
   
   ?>
   
AGORA O CÓDIGO ESTÁ ASSIM:
<?php
$servidor= "localhost";
$username="root";
$password="";
$dbName="cadastroelogin";

$conexao=mysqli_connect($servidor, $username, $password, $dbName);
if(!$conexao){
  die("houve um erro de conexão:" .mysqli_connect_errno());
}
