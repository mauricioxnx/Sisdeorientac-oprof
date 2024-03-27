<?php
// Conexão com o banco de dados (substitua pelos seus próprios dados)
@include 'config.php';

// Função para redirecionar com base no curso escolhido
function redirecionarComBaseNoCurso($selectedCurso)
{
    // Mapeamento de idCurso para nome do arquivo
    $cursoArquivos = [
        1 => "view_infor2.php",
        2 => "view_saud2.php",
        3 => "view_gest2.php",
        4 => "view_cont2.php",
        5 => "view_fisic2.php",
    ];

    // Verifica se o idCurso está no mapeamento
    if (array_key_exists($selectedCurso, $cursoArquivos)) {
        // Redireciona para a página correspondente
        header("Location: " . $cursoArquivos[$selectedCurso]);
        exit();
    } else {
        // Redireciona para a página padrão se o curso não for encontrado
        header("Location: pagina_padrao.php");
        exit();
    }
}

// Processar dados do formulário
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$endereco = isset($_POST['endereco']) ? $_POST['endereco'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
$Curso = isset($_POST['Curso']) ? $_POST['Curso'] : '';
$instituicao = isset($_POST['instituicao']) ? $_POST['instituicao'] : '';

// Verificar se os campos obrigatórios estão preenchidos
if (empty($nome) || empty($endereco) || empty($email) || empty($telefone) || empty($Curso) || empty($instituicao)) {
    echo "Por favor, preencha todos os campos obrigatórios.";
} else {
    // Inserir dados no banco de dados sem o campo mensalidade
    $sql = "INSERT INTO couniver1(nome, endereco, email, telefone, idCurso, idmed)
            VALUES ('$nome', '$endereco', '$email', '$telefone', '$Curso', '$instituicao')";

    if ($mysqli->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";

        // Redirecionar com base no curso escolhido
        redirecionarComBaseNoCurso($Curso);
    } else {
        echo "Erro ao cadastrar no banco de dados: " . $mysqli->error;
    }
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

        <!--=== Imagem do Trabalho ===-->
        <div class="job-img margin-bottom-30">
            <div class="job-banner">
                <h2>Centro de Orientação para para Universidade ...</h2>
            </div>
            <div class="job-img-inputs">
            </div>
        </div>
        <!--=== Fim da Imagem do Trabalho ===-->



        <!-- Formulário de Pedido -->
        <form method="post" action="" enctype="multipart/form-data" id="sky-form1" class="sky-form">
            <header>Formulário de Orientação para Universidade</header>

            <fieldset>
                <div class="row">
                    <section class="col col-6">
                        <label class="input">
                            <i class="icon-append fa fa-user"></i>
                            <input type="text" name="nome" placeholder="Nome">
                        </label>
                    </section>
                    <section class="col col-6">
                        <label class="input">
                            <i class="icon-append fa fa-briefcase"></i>
                            <input type="text" name="endereco" placeholder="endereço">
                        </label>
                    </section>
                </div>

                <div class="row">
                    <section class="col col-6">
                        <label class="input">
                            <i class="icon-append fa fa-envelope"></i>
                            <input type="email" name="email" placeholder="E-mail">
                        </label>
                    </section>
                    <section class="col col-6">
                        <label class="input">
                            <i class="icon-append fa fa-phone"></i>
                            <input type="tel" name="telefone" placeholder="Telefone">
                        </label>
                    </section>
                </div>
            </fieldset>

            <fieldset>
                <div class="row">
                    <section class="col col-6">
                        <label class="select">
                            <select name="Curso">
                                <option value="none" selected disabled>Selecione um Curso</option>
                                <?php

                                // Consulta SQL para obter os cursos
                                $sql = "SELECT idCurso, nome FROM curso";
                                $result = $mysqli->query($sql);

                                // Verificar se há resultados
                                if ($result->num_rows > 0) {
                                    // Loop através dos resultados da consulta
                                    while ($row = $result->fetch_assoc()) {
                                        $idCurso = $row['idCurso'];
                                        $nomeCurso = $row['nome'];
                                        echo "<option value='$idCurso'>$nomeCurso</option>";
                                    }
                                } else {
                                    echo "<option value='none' disabled>Nenhum curso encontrado</option>";
                                }
                                ?>
                            </select>
                            <i></i>
                        </label>
                        </section>







                    <section class="col col-6">
    <label class="select">
        <select name="instituicao">
            <option value="none" selected disabled>Selecione a Instituição freequentada</option>
            <?php
                                // Consulta SQL para obter as instituições
                                $sqlInstituicao = "SELECT idmed, instituicao FROM medio";
                                $resultInstituicao = $mysqli->query($sqlInstituicao);

                                // Verificar se há resultados
                                if ($resultInstituicao->num_rows > 0) {
                                    // Loop através dos resultados da consulta
                                    while ($rowInstituicao = $resultInstituicao->fetch_assoc()) {
                                        $idInstituicao = $rowInstituicao['idmed'];
                                        $nomeInstituicao = $rowInstituicao['instituicao'];
                                        echo "<option value='$idInstituicao'>$nomeInstituicao</option>";
                                    }
                                } else {
                                    echo "<option value='none' disabled>Nenhuma instituição encontrada</option>";
                                }
                                ?>
                            </select>
                            <i></i>
                        </label>
                    </section>


                </div>

            </fieldset>
            <footer>
                <button type="submit" class="btn-u">Enviar pedido</button>
                <div class="progress"></div>
            </footer>
            <div class="message">
                <i class="rounded-x fa fa-check"></i>
                <p>Obrigado pelo seu pedido!<br>Entraremos em contato em breve.</p>
            </div>
        </form>
        <!-- Fim do Formulário de Pedido -->

        <!--=== Footer Version 4 ===-->
        <div class="footer-v4">
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <!-- About -->
                        <div class="col-md-4 md-margin-bottom-40">
                            <a href="index.html"><img class="footer-logo" src="assets/img/logo-2.png" alt=""></a>
                            <p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero
                                tincidunt sodales.</p>
                            <br>
                            <ul class="list-unstyled address-list margin-bottom-20">
                                <li><i class="fa fa-angle-right"></i>California, US, Lorem Lis Street, Orange, 25</li>
                                <li><i class="fa fa-angle-right"></i>Phone: 800 123 3456</li>
                                <li><i class="fa fa-angle-right"></i>Fax: 800 123 3456</li>
                                <li><i class="fa fa-angle-right"></i>Email: info@anybiz.co</li>
                            </ul>

                            <ul class="list-inline shop-social">
                                <li><a href="#"><i class="fb rounded-1x fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="tw rounded-1x fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="gp rounded-1x fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="yt rounded-1x fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <!-- End About -->

                        <!-- Simple List -->
                        <div class="col-md-2 col-sm-3">
                            <div class="row">
                                <div class="col-sm-12 col-xs-6">
                                    <h2 class="thumb-headline">Secciones</h2>
                                    <ul class="list-unstyled simple-list margin-bottom-20">
                                        <li><a href="#">Ultima Hora</a></li>
                                        <li><a href="#">Exclusiva</a></li>
                                        <li><a href="#">Documentos </a></li>
                                        <li><a href="#">Francisco papa</a></li>
                                        <li>...</li>
                                    </ul>
                                </div>

                                <div class="col-sm-12 col-xs-6">
                                    <h2 class="thumb-headline">Temas</h2>
                                    <ul class="list-unstyled simple-list">
                                        <li><a href="#">Ultima Hora</a></li>
                                        <li><a href="#">Exclusiva</a></li>
                                        <li><a href="#">Documentos </a></li>
                                        <li><a href="#">Francisco papa</a></li>
                                        <li>...</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-3">
                            <div class="row">
                                <div class="col-sm-12 col-xs-6">
                                    <h2 class="thumb-headline">Utilidades</h2>
                                    <ul class="list-unstyled simple-list margin-bottom-20">
                                        <li><a href="#">Ultima Hora</a></li>
                                        <li><a href="#">Exclusiva</a></li>
                                        <li><a href="#">Documentos </a></li>
                                        <li>...</li>
                                    </ul>
                                </div>

                                <div class="col-sm-12 col-xs-6">
                                    <h2 class="thumb-headline">Documentos</h2>
                                    <ul class="list-unstyled simple-list">
                                        <li><a href="#">Ultima Hora</a></li>
                                        <li><a href="#">Exclusiva</a></li>
                                        <li><a href="#">Documentos </a></li>
                                        <li><a href="#">Francisco papa</a></li>
                                        <li>...</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-3">
                            <div class="row">
                                <div class="col-sm-12 col-xs-6">
                                    <h2 class="thumb-headline">Publicidad</h2>
                                    <ul class="list-unstyled simple-list margin-bottom-20">
                                        <li><a href="#">Ultima Hora</a></li>
                                        <li><a href="#">Exclusiva</a></li>
                                        <li><a href="#">Documentos </a></li>
                                        <li><a href="#">Francisco papa</a></li>
                                        <li>...</li>
                                    </ul>
                                </div>

                                <div class="col-sm-12 col-xs-6">
                                    <h2 class="thumb-headline">Contacto</h2>
                                    <ul class="list-unstyled simple-list">
                                        <li><a href="#">Ultima Hora</a></li>
                                        <li><a href="#">Exclusiva</a></li>
                                        <li><a href="#">Documentos </a></li>
                                        <li><a href="#">Francisco papa</a></li>
                                        <li>...</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-3">
                            <div class="row">
                                <div class="col-sm-12 col-xs-6">
                                    <h2 class="thumb-headline">Utilidades</h2>
                                    <ul class="list-unstyled simple-list margin-bottom-20">
                                        <li><a href="#">Ultima Hora</a></li>
                                        <li><a href="#">Exclusiva</a></li>
                                        <li>...</li>
                                    </ul>
                                </div>

                                <div class="col-sm-12 col-xs-6">
                                    <h2 class="thumb-headline">Documentos</h2>
                                    <ul class="list-unstyled simple-list">
                                        <li><a href="#">Ultima Hora</a></li>
                                        <li><a href="#">Exclusiva</a></li>
                                        <li>...</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Simple List -->
                    </div>
                </div><!--/end continer-->
            </div><!--/footer-->

            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                2015 &copy; Unify. ALL Rights Reserved.
                                <a target="_blank" href="https://twitter.com/htmlstream">Htmlstream</a> | <a
                                    href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-inline sponsors-icons pull-right">
                                <li><i class="fa fa-cc-paypal"></i></li>
                                <li><i class="fa fa-cc-visa"></i></li>
                                <li><i class="fa fa-cc-mastercard"></i></li>
                                <li><i class="fa fa-cc-discover"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--/copyright-->
        </div>
        <!--=== End Footer Version 4 ===-->
    </div><!--/End Wrapepr-->

    <!--=== Style Switcher ===-->
    <i class="style-switcher-btn fa fa-cogs hidden-xs"></i>
    <div class="style-switcher animated fadeInRight">
        <div class="style-swticher-header">
            <div class="style-switcher-heading">Style Switcher</div>
            <div class="theme-close"><i class="icon-close"></i></div>
        </div>

        <div class="style-swticher-body">
            <!-- Theme Colors -->
            <div class="style-switcher-heading">Theme Colors</div>
            <ul class="list-unstyled">
                <li class="theme-default theme-active" data-style="default" data-header="light"></li>
                <li class="theme-blue" data-style="blue" data-header="light"></li>
                <li class="theme-orange" data-style="orange" data-header="light"></li>
                <li class="theme-red" data-style="red" data-header="light"></li>
                <li class="theme-light" data-style="light" data-header="light"></li>
                <li class="theme-purple last" data-style="purple" data-header="light"></li>
                <li class="theme-aqua" data-style="aqua" data-header="light"></li>
                <li class="theme-brown" data-style="brown" data-header="light"></li>
                <li class="theme-dark-blue" data-style="dark-blue" data-header="light"></li>
                <li class="theme-light-green" data-style="light-green" data-header="light"></li>
                <li class="theme-dark-red" data-style="dark-red" data-header="light"></li>
                <li class="theme-teal last" data-style="teal" data-header="light"></li>
            </ul>

            <!-- Theme Skins -->
            <div class="style-switcher-heading">Theme Skins</div>
            <div class="row no-col-space margin-bottom-20 skins-section">
                <div class="col-xs-6">
                    <button data-skins="default"
                        class="btn-u btn-u-xs btn-u-dark btn-block active-switcher-btn handle-skins-btn">Light</button>
                </div>
                <div class="col-xs-6">
                    <button data-skins="dark" class="btn-u btn-u-xs btn-u-dark btn-block skins-btn">Dark</button>
                </div>
            </div>

            <hr>

            <!-- Layout Styles -->
            <div class="style-switcher-heading">Layout Styles</div>
            <div class="row no-col-space margin-bottom-20">
                <div class="col-xs-6">
                    <a href="javascript:void(0);"
                        class="btn-u btn-u-xs btn-u-dark btn-block active-switcher-btn wide-layout-btn">Wide</a>
                </div>
                <div class="col-xs-6">
                    <a href="javascript:void(0);" class="btn-u btn-u-xs btn-u-dark btn-block boxed-layout-btn">Boxed</a>
                </div>
            </div>

            <hr>

            <!-- Theme Type -->
            <div class="style-switcher-heading">Theme Types and Versions</div>
            <div class="row no-col-space margin-bottom-10">
                <div class="col-xs-6">
                    <a href="E-Commerce/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">Shop UI <small
                            class="dp-block">Template</small></a>
                </div>
                <div class="col-xs-6">
                    <a href="One-Pages/Classic/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">One Page <small
                            class="dp-block">Template</small></a>
                </div>
            </div>

            <div class="row no-col-space">
                <div class="col-xs-6">
                    <a href="Blog-Magazine/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">Blog <small
                            class="dp-block">Template</small></a>
                </div>
                <div class="col-xs-6">
                    <a href="RTL/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">RTL <small
                            class="dp-block">Version</small></a>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- JS Global Compulsory -->
    <script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- JS Implementing Plugins -->
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery.parallax.js"></script>
    <script type="text/javascript" src="assets/plugins/counter/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/plugins/counter/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="assets/plugins/image-hover/js/modernizr.js"></script>
    <script type="text/javascript" src="assets/plugins/image-hover/js/touch.js"></script>
    <!-- JS Customization -->
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <!-- JS Page Level -->
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
            App.initCounter();
            App.initParallaxBg();
            StyleSwitcher.initStyleSwitcher();
        });
    </script>
</body>

</html>