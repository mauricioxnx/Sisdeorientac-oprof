<?php

// Carregar o Composer
require './vendor/autoload.php';

// Incluir conexão com BD
include_once 'config.php';

// QUERY para recuperar os registros do banco de dados
$query_usuarios = "SELECT iduser, idmed, data FROM plano";

// Executar a QUERY
$result = $mysqli->query($query_usuarios);

// Verificar se ocorreu um erro na execução da query
if (!$result) {
    die('Erro na execução da query: ' . $mysqli->error);
}

// Criar o HTML para o PDF
$dados .= "<!DOCTYPE html>";
$dados .= "<html lang='pt-br'>";
$dados .= "<head>";
$dados .= "<meta charset='UTF-8'>";
$dados .= "<link rel='stylesheet' href='http://localhost/celke/css/custom.css'>";
$dados .= "<title>Celke - Gerar PDF</title>";
$dados .= "</head>";
$dados .= "<body>";
$dados .= "<h1>Listar os Usuários</h1>";

// Ler os registros retornados do BD
while ($row = $result->fetch_assoc()) { // Alterado para fetch_assoc
    $dados .= "<p>iduser: " . $row['iduser'] . "</p>";
    $dados .= "<p>idmed: " . $row['idmed'] . "</p>";
    $dados .= "<p>data: " . $row['data'] . "</p>";
    $dados .= "<hr>";
}

//$dados .= "<img src='http://localhost/celke/imagens/celke.jpg'><br>";
$dados .= "<p>O PHP proin iaculis, libero et dictum fringilla, ex metus scelerisque mauris, sit amet lobortis enim justo quis arcu. Proin eget pharetra ipsum, eget auctor purus.</p>";
$dados .= "</body>";
$dados .= "</html>";

// Referenciar o namespace Dompdf
use Dompdf\Dompdf;

// Instanciar e usar a classe Dompdf
$dompdf = new Dompdf(['enable_remote' => true]);

// Carregar o HTML no Dompdf
$dompdf->loadHtml($dados);

// Configurar o tamanho e a orientação do papel
$dompdf->setPaper('A4', 'portrait');

// Renderizar o HTML como PDF
$dompdf->render();

// Gerar o PDF
$dompdf->stream();
exit();