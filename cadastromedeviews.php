<?php
@include 'config.php';

$name = "";
$endereco = "";
$curso = "";
$propina = "";
$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $curso = $_POST['curso'];
    $propina = $_POST['propina'];

    if (empty($name) || empty($endereco) || empty($curso) || empty($propina)) {
        $error = "Por favor, preencha todos os campos.";
    } else {
        $insert = "INSERT INTO medio (instituicao, endereco, idCurso, proprina) VALUES ('$name', '$endereco', '$curso', '$propina')";

        if (mysqli_query($mysqli, $insert)) {
            $name = "";
            $endereco = "";
            $curso = "";
            $propina = "";
            header('location:univiews.php');
            exit;
        } else {
            $error = "Erro ao inserir os dados: " . $mysqli->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Universidade</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h2>Cadastro de Universidade</h2>
        <?php if (!empty($error)) { ?>
            <div class="alert alert-danger">
                <?php echo $error; ?>
            </div>
        <?php } ?>
        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nome</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nome" value="<?php echo $name; ?>">
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
                    <input type="text" class="form-control" name="curso" value="<?php echo $curso; ?>">
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
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>

               <div class="offset-sm-3 col-sm-3 d-grid">
    <a href="medeviews .php" class="btn btn-primary">Lista</a>
</div>

            </div>
        </form>
    </div>
</body>

</html>