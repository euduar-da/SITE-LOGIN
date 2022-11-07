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
   
