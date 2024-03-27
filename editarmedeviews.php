<?php
@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:login_form.php');
}

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM medio WHERE idmed = $id";
    $result = $mysqli->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $nome = $row['instituicao'];
        $endereco = $row['endereco'];
        $curso = $row['idCurso'];
        $propina = $row['proprina'];
    } else {
        echo "ID não encontrado.";
        exit;
    }
} else {
    echo "ID não especificado.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['instituicao'];
    $endereco = $_POST['endereco'];
    $curso = $_POST['idCurso'];
    $propina = $_POST['propina'];

    $update = "UPDATE medio SET instituicao = '$nome', endereco = '$endereco', idCurso = '$curso', proprina = '$propina' WHERE idmed = $id";

    if (mysqli_query($mysqli, $update)) {
        header('location: medeviews.php');
        exit;
    } else {
        $error = "Erro ao atualizar os dados: " . $mysqli->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Universidade</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h2>Editar Universidade</h2>
        <?php if (!empty($error)) { ?>
            <div class="alert alert-danger">
                <?php echo $error; ?>
            </div>
        <?php } ?>
        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nome</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="instituicao" value="<?php echo $nome; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Endereço</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="endereco" value="<?php echo $endereco; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Curso</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="idCurso" value="<?php echo $curso; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Propina</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="propina" value="<?php echo $propina; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>