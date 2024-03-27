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
    <title>user page</title>

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
            <a href="cadastromedeviews.php" class="btn">Ensino Medio</a>
            <a href="cadastrouniviews.php" class="btn">Ensino Superior</a>
            <a href="profissonal.php" class="btn">Profissional</a>


        </div>

    </div>
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <img src="imagem/search.svg" alt="bootstrap">
        </button>
    </div>

   
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
        window.location = 'admin_page.php?search=' + search.value;
    }
</script>

</html>