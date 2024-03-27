<?php
include 'config.php';

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $mysqli->real_escape_string($_POST['nome']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $pass = md5($_POST['senha']);
        $cpass = md5($_POST['cpassword']);
        $user_type = $_POST['use_type'];

        $select = "UPDATE usuario SET nome = '$name', email = '$email', senha = '$pass' WHERE id = $id ";

        if ($mysqli->query($select) === TRUE) {
            echo "Registro atualizado com sucesso.";
        } else {
            echo "Erro ao atualizar registro: " . $mysqli->error;
        }
    }
}

header('location:admin_page.php');


?>