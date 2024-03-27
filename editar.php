<?php
include_once('config.php');

if (!empty($_GET['id'])) {
   $id = (isset($_GET['id'])) ? intval($_GET['id']) : 0;


   $select = "SELECT * FROM usuario WHERE id=$id";
   $result = $mysqli->query($select);

   if ($result->num_rows > 0) {
      $user_data = mysqli_fetch_assoc($result);
      $id = $user_data['id'];
   } else {
      header('Location: admin_page.php');
   }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $name = $mysqli->real_escape_string($_POST['nome']);
   $email = $mysqli->real_escape_string($_POST['email']);
   $pass = md5($_POST['senha']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['use_type'];

   // Validation code here
   // Validation code here
   if (empty($name) || empty($email) || empty($_POST['senha']) || empty($_POST['cpassword'])) {
      $error = "Por favor, preencha todos os campos.";
   } else if ($pass !== $cpass) {
      $error = "As senhas não correspondem.";
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error = "O email digitado é inválido.";
   }



   // Update code here
   $stmt = $mysqli->prepare("UPDATE usuario SET nome = ?, email = ?, senha = ? WHERE id = ?");
   $stmt->bind_param("sssi", $name, $email, $pass, $id);
   if ($stmt->execute()) {
      header('Location: admin_page.php');
   } else {
      $error = "Erro ao atualizar registro: " . $mysqli->error;
   }
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Formulário de Registro</title>

   <!-- link para arquivo css personalizado -->
   <link rel="stylesheet" href="css/style.css">
   

</head>

<body>

   <div class="form-container">

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         <h3>Registro</h3>
         <?php
         if (isset($error)) {
            echo '<span class="error-msg">' . $error . '</span>';
         }
         ?>

         <input type="text" name="nome" value="<?php echo $user_data['nome']; ?>" required
            placeholder="Digite seu nome">
         <input type="email" name="email" value="<?php echo $user_data['email']; ?>" required
            placeholder="Digite seu email">
         <input type="password" name="senha" value="" required placeholder="Digite sua senha">
         <input type="password" name="cpassword" required placeholder="Confirmar sua senha">
         <select name="use_type">
            <option value="user" <?php if ($user_data['use_type'] == 'user') {
               echo 'selected';
            } ?>>Usuário</option>
            <option value="admin" <?php if ($user_data['use_type'] == 'admin') {
               echo 'selected';
            } ?>>Administrador
            </option>
         </select>
         <input type="submit" name="submit" value="Atualizar" class="form-btn">
         <p>Já tem uma conta? <a href="login_form.php">Ir para o login</a></p>
      </form>

   </div>

</body>

</html>