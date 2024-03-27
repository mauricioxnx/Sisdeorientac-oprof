<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
}


?>


<?php
// print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    //header('Location: login_form.php');
}
// $logado = $_SESSION['email'];
if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM universidade WHERE idunver LIKE '%$data%' or nome LIKE '%$data%' ORDER BY idunver DESC";

} else {
    $sql = "SELECT * FROM universidade ORDER BY idunver DESC";
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
      <h3>Olá, <span>utilizador</span></h3>
      <h1>Bem-vindo <span><?php echo $_SESSION['user_name'] ?>
                </span></h1>
            <p>esta é a pagina do utilizador</p>
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
        <h2>Lista de intituições universitarias</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">curso</th>
                    <th scope="col">propina</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Exluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
            <td>{$row['idunver']}</td>
            <td>{$row['instituicao']}</td>
            <td>{$row['endereco']}</td>
            <td>{$row['idCurso']}</td>
            <td>{$row['proprina']}</td>
            <td>
              <a class='btn btn-outline-primary btn-sm' href='editaruniviews.php?id={$row['idunver']}'>
                <img  src='imagem/pencil.svg' alt='bootstrap'>
              </a>
            </td>
            <td>
              <a class='btn btn-outline-danger btn-sm' href='apagaruniviews.php?id={$row['idunver']}'>
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

    search.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {
            searchData();
        }
    });

    function searchData() {
        window.location = 'univiews.php?search=' + search.value;
    }
</script>

</html>