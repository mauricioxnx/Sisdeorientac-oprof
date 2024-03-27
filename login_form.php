<?php
error_reporting(0);
@include 'config.php';

session_start();

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $name = $mysqli->real_escape_string($_POST['nome']);
   $email = $mysqli->real_escape_string($_POST['email']);
   $pass = md5($_POST['senha']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['use_type'];

   $select = "SELECT * FROM usuario WHERE email = '$email' && senha = '$pass' ";

   $result = mysqli_query($mysqli, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['use_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['nome'];
         header('location:admin_page.php');

      }elseif($row['use_type'] == 'user'){

         $_SESSION['user_name'] = $row['nome'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'email ou senha incorrecta!';
   }
   
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login </h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Digite o seu email">
      <input type="password" name="senha" required placeholder="Digite a sua senha">
      <input type="submit" name="submit" value="Entrar" class="form-btn">
      <p>não tem uma conta? <a href="register_form.php">registrar se</a></p>
   </form>

</div>

</body>
</html>