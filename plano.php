<?php
@include 'config.php';
$iduser = "";
$idmed = "";
$data = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $iduser = $_POST['usuario'];
    $idmed = $_POST['medio'];
    $data = $_POST['datahora'];

    if (empty($iduser) || empty($idmed) || empty($data)) {
        $error = "Por favor, preencha todos os campos.";
    } else {
        $insert = "INSERT INTO plano (iduser, idmed, data) VALUES ('$iduser', '$idmed', '$data')";

        if (mysqli_query($conn, $insert)) {
            $iduser = "";
            $idmed = "";
            $data = "";
            header('location:univiews.php');
            exit;
        } else {
            $error = "Erro ao inserir os dados: " . mysqli_error($conn);
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
    <title>plano medio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h2>plano medio</h2>
        <?php if (!empty($error)) { ?>
            <div class="alert alert-danger">
                <?php echo $error; ?>
            </div>
        <?php } ?>
        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Users</label>
                <div class="col-sm-6">
                    <select name="usuario">
                        <option>Selecione</option>
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM usuario");
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['nome']; ?></option>
                        <?php } ?>
                    </select><br><br>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Medio inst</label>
                <div class="col-sm-6">
                    <select name="medio">
                        <option>Selecione</option>
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM medio");
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <option value="<?php echo $row['idmed']; ?>"><?php echo $row['nome']; ?></option>
                        <?php } ?>
                    </select><br><br>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Curso</label>
                <div class="col-sm-6">
                    <label for="datahora">Data e Hora:</label>
                    <input type="datetime-local" name="datahora" id="datahora" required>
                    <br>
                </div>
            </div>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>