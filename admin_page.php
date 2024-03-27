<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');  
}


?>


<?php
// print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        //header('Location: login_form.php');
    }
   // $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
         $sql = "SELECT * FROM usuario WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";

} else {
   $sql = "SELECT * FROM usuario ORDER BY id DESC";
}
$result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="styles/global.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Olá, <span>adminstrador</span></h3>
      <h1>Bem-vindo <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>esta é a pagina do adminstrador</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">registrar</a>
      <a href="logout.php" class="btn">Sair</a>


   </div>

</div>
        <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <img src="imagem/search.svg" alt="bootstrap">
          </button>
    </div>

<div class="container my-5">
   <h2>Lista dos usuarios</h2>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Estatus</th>
      <th scope="col">Editar</th>
      <th scope="col">Exluir</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nome']}</td>
            <td>{$row['email']}</td>
            <td>{$row['use_type']}</td>
            <td>
              <a class='btn btn-outline-primary btn-sm' href='editar.php?id={$row['id']}'>
                <img  src='imagem/pencil.svg' alt='bootstrap'>
              </a>
            </td>
            <td>
              <a class='btn btn-outline-danger btn-sm' href='apagar.php?id={$row['id']}'>
                <img src='imagem/trash.svg' alt='bootstrap'>
              </a>
            </td>
          </tr>";
      }
      ?>
    </tbody>
  </table>

</div>
</body>

<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'admin_page.php?search='+search.value;
    }
</script>
</html>