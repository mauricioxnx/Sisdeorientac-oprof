<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $id = $_POST['id'];
   $name = $mysqli->real_escape_string( $_POST['nome']);
   $email = $mysqli->real_escape_string( $_POST['email']);
   $pass = md5($_POST['senha']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['use_type'];

   $select = " SELECT * FROM usuario WHERE email = '$email' && senha = '$pass' ";

   $result = mysqli_query($mysqli, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'Senhas não concidem!';
      }else{
         $insert = "INSERT INTO usuario(nome, email, senha, use_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($mysqli, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>registro</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="nome" required placeholder="digite seu nome">
      <input type="email" name="email" required placeholder="digite seu email">
      <input type="password" name="senha" required placeholder="digite sua senha">
      <input type="password" name="cpassword" required placeholder="confirmar sua senha">
      <select name="use_type">
         <option value="user">usuario</option>
         <option value="admin">administrador</option>
      </select>
      <input type="submit" name="submit" value="registra-se" class="form-btn">
      <p>já tem uma conta? <a href="login_form.php">ir ao login</a></p>
   </form>

</div>

</body>
</html>