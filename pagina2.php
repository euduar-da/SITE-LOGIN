<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Área do cadastro</title>
   <link rel="stylesheet" href="style2.css">
</head>
<body>
    <form action="cadastro.php" method="POST">
   <div class="main-login">
       <div class="left-login">
       <img src="Online tech talks-bro.svg" class="left-login-image" alt="index">
       </div>
       <div class="rigth-login">
       <div class="card-login">
           <h1>CADASTRE-SE</h1>
           <div class="text-field">
               <label for="usuario">Crie um usuario</label>
               <input type="text" name="usuario" placeholder="Usuario">
           </div>
           <div class="text-field">
               <label for="senha">Crie uma senha</label>
               <input type="password" name="senha" placeholder="Senha">
           </div>
           <input class="inputSubmit" type="submit" name="submit" value="Login">
        </form>
        <p>Já tem uma conta? <a href="pagina1.php">Entre aqui</a></p>
       </div>
   </div>
</div>
</body>
</html>
