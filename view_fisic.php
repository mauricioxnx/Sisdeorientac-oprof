<?php
@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
}
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="pt" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="pt" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="pt"> <!--<![endif]-->

<head>
    <title>Vagas | Unify - Modelo de Site Responsivo</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="assets/css/headers/header-default.css">
    <link rel="stylesheet" href="assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/animate.css">
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
    <!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->

    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
    <link rel="stylesheet" href="assets/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">


    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css'
        href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="assets/css/headers/header-v6.css">
    <link rel="stylesheet" href="assets/css/footers/footer-v4.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/animate.css">
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/image-hover/css/img-hover.css">

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="assets/css/pages/page_job.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
    <link rel="stylesheet" href="assets/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body class="header-fixed header-fixed-space">
    <div class="wrapper">
        <!--=== Header v6 ===-->
        <div class="header-v6 header-classic-dark header-sticky">
            <!-- Navbar -->
            <div class="navbar mega-menu" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Alternar navegação</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Navbar Brand -->
                        <div class="navbar-brand">
                            <a href="index.html">
                                <img class="default-logo" src="assets/img/logo3-light.png" alt="Logo">
                            </a>
                        </div>
                        <!-- Fim da Marca da Barra de Navegação -->

                        <!-- Cabeçalho Interno Direito -->
                        <div class="header-inner-right">
                            <ul class="menu-icons-list">
                                <li class="menu-icons">
                                    <i class="menu-icons-style search search-close search-btn fa fa-search"></i>
                                    <div class="search-open">
                                        <input type="text" class="animated fadeIn form-control"
                                            placeholder="Iniciar pesquisa ...">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Fim do Cabeçalho Interno Direito -->
                    </div>

                    <!-- Coletar os links de navegação, formulários e outros conteúdos para alternar -->
                    <div class="collapse navbar-collapse navbar-responsive-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav">
                                <!-- Página Inicial -->
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                        principal
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Opção 1: Página Padrão</a></li>
                                    </ul>
                                </li>
                                <!-- Fim da Página Inicial -->

                                <!-- Páginas -->
                                <li class="dropdown active">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                        Páginas
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- Páginas Sobre -->
                                        <li class="dropdown-submenu">
                                            <a href="javascript:void(0);">Páginas Sobre</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="page_about2.html">Sobre Nós </a></li>
                                                <li><a href="page_about3.html">Sobre Nós 1</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <!-- Fim das Páginas -->

                                <!-- Blog -->
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                        Qualquer
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="javascript:void(0);">Blog com Imagem Grande</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog_large_right_sidebar1.html">Barra Lateral Direita</a>
                                                </li>
                                                <li><a href="blog_large_left_sidebar1.html">Barra Lateral Esquerda</a>
                                                </li>
                                                <li><a href="blog_large_full_width1.html">Largura Total</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <!-- Fim do Blog -->

                                <!-- Portfólio -->
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                        Material
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="javascript:void(0);">Sem Espaço em Caixa</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="portfolio_2_columns_grid_no_space.html">2 Colunas</a></li>
                                                <li><a href="portfolio_3_columns_grid_no_space.html">3 Colunas</a></li>
                                                <li><a href="portfolio_4_columns_grid_no_space.html">4 Colunas</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:void(0);">Grade em Caixa</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="portfolio_2_columns_grid.html">2 Colunas</a></li>
                                                <li><a href="portfolio_3_columns_grid.html">3 Colunas</a></li>
                                                <li><a href="portfolio_4_columns_grid.html">4 Colunas</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Fim do Portfólio -->

                                <!-- Recursos -->
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                        sair
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page_login1.php">Logout</a></li>
                                    </ul>
                                </li>
                                <!-- Fim dos Recursos -->


                            </ul>
                        </div>
                    </div><!--/navbar-collapse-->
                </div>
            </div>
            <!-- Fim da Barra de Navegação -->
        </div>

    <h2>Dados da Tabela "comedio1"</h2>
    <?php
 
    // Consulta SQL
    
    $sql = "SELECT * FROM comedio1 ORDER BY id DESC LIMIT 1";
    $result = $mysqli->query($sql);

    // Exibição dos resultados em uma tabela HTML
    if ($result->num_rows > 0 && $row = $result->fetch_assoc()) {
        echo '<div class="user-details">';
        echo '<h3>Detalhes do Usuário</h3>';

        echo '<div class="info">';
        echo '<p><strong>Nome:</strong> ' . $row['nome'] . '</p>';
        echo '<p><strong>Endereço:</strong> ' . $row['endereco'] . '</p>';
        echo '<p><strong>Email:</strong> ' . $row['email'] . '</p>';
        echo '<p><strong>Telefone:</strong> ' . $row['telefone'] . '</p>';
        echo '<p><strong>ID do Curso:</strong> ' . $row['idCurso'] . '</p>';
        echo '<p><strong>Mensalidade:</strong> ' . $row['mensalidade'] . '</p>';
        echo '</div>';

        echo '</div>';
    } else {
        echo "Nenhum resultado encontrado.";
    }


    ?>

    <br>

    <h2>Dados da Tabela "medio"</h2>
    <?php

    // Nova consulta SQL
    $sql = "SELECT * FROM medio ORDER BY idmed DESC";
    $result = $mysqli->query($sql);

    // Exibição dos resultados em uma tabela HTML
    if ($result->num_rows > 0) {
        echo '<div class="institution-list">';
        echo '<h3>Instituições Disponíveis</h3>';

        while ($row = $result->fetch_assoc()) {
            echo '<div class="institution-item">';
            echo '<p><strong>ID:</strong> ' . $row['idmed'] . '</p>';
            echo '<p><strong>Instituição:</strong> ' . $row['instituicao'] . '</p>';
            echo '<p><strong>Endereço:</strong> ' . $row['endereco'] . '</p>';
            echo '<p><strong>Proprietário:</strong> ' . $row['proprina'] . '</p>';
            echo '</div>';
        }

        echo '</div>';
    } else {
        echo 'Nenhuma instituição encontrada que ofereça o curso de informática.';
    }
    ?>



</body>

</html>