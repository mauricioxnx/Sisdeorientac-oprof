<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados das Tabelas</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <?php
    @include 'config.php';
    $sql_medio = "SELECT * FROM universidade WHERE universidade.curso = 'informatica'";

    $result_medio = $mysqli->query($sql_medio);

    if ($result_medio->num_rows > 0) {
        echo "<h2>Os institutos superiores ou universidades encontrados foram</h2>";
        echo "<table><tr><th>ID</th><th>Nome</th><th>Endereço</th><th>Curso</th><th>Proprina</th></tr>";
        while ($row = $result_medio->fetch_assoc()) {
            echo "<tr><td>" . $row["idunver"] . "</td><td>" . $row["instituicao"] . "</td><td>" . $row["endereco"] . "</td><td>" . $row["curso"] . "</td><td>" . $row["proprina"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado para a tabela 'medio'";
    }

    $sql_comedio = "SELECT * FROM comedio WHERE comedio.curso = 'informatica'";
    $result_comedio = $mysqli->query($sql_comedio);

    if ($result_comedio->num_rows > 0) {
        echo "<h2>os dados que poseste foram</h2>";
        echo "<table><tr><th>ID</th><th>Nome</th><th>Endereço</th><th>Email</th><th>Telefone</th><th>Curso</th><th>Mensalidade</th></tr>";
        while ($row = $result_comedio->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["endereco"] . "</td><td>" . $row["email"] . "</td><td>" . $row["telefone"] . "</td><td>" . $row["Curso"] . "</td><td>" . $row["mensalidade"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado para a tabela 'comedio'";
    }

    $mysqli->close();
    ?>

</body>

</html>