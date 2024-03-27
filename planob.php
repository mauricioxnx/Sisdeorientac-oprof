<?php
// Inclui o arquivo de configuração
@include 'config.php';

// Inicializa as variáveis
$iduser = "";
$idmed = "";
$data = "";
$error = "";

// Verifica se a requisição foi feita via método POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtém os valores do formulário
    $iduser = $_POST['iduser'];
    $idmed = $_POST['idmed'];
    $data = $_POST['data'];

    // Verifica se algum campo está vazio
    if (empty($iduser) || empty($idmed) || empty($data)) {
        $error = "Por favor, preencha todos os campos.";
    } else {
        // Monta a query de inserção
        $insert = "INSERT INTO plano (iduser, idmed, data) VALUES ('$iduser', '$idmed', '$data')";

        // Executa a query
        if (mysqli_query($mysqli, $insert)) {
            // Limpa as variáveis e redireciona para a página desejada
            $iduser = "";
            $idmed = "";
            $data = "";
            header('location:univiews.php');
            exit;
        } else {
            // Em caso de erro, define a mensagem de erro
            $error = "Erro ao inserir os dados: " . mysqli_error($mysqli);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plano de Medio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h2>Plano de Medio</h2>

        <?php if (!empty($error)) { ?>
            <div class="alert alert-danger">
                <?php echo $error; ?>
            </div>
        <?php } ?>

        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Usuário</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="iduser" value="<?php echo $iduser; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Médio</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="idmed" value="<?php echo $idmed; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Data e Hora:</label>
                <div class="col-sm-6">
                    <label for="datahora"></label>
                    <input type="datetime-local" name="data" value="<?php echo $data; ?>">
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