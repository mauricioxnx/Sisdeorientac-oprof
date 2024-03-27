<?php

@include 'config.php';

if (isset($_POST['submit'])) {

	$id = $_POST['id'];
	$name = $mysqli->real_escape_string($_POST['nome']);
	$email = $mysqli->real_escape_string($_POST['email']);
	$pass = md5($_POST['senha']);
	$cpass = md5($_POST['cpassword']);
	$user_type = $_POST['use_type'];

	$select = " SELECT * FROM usuario WHERE email = '$email' && senha = '$pass' ";

	$result = mysqli_query($mysqli, $select);

	if (mysqli_num_rows($result) > 0) {

		$error[] = 'user already exist!';

	} else {

		if ($pass != $cpass) {
			$error[] = 'Senhas não concidem!';
		} else {
			$insert = "INSERT INTO usuario(nome, email, senha, use_type) VALUES('$name','$email','$pass','$user_type')";
			mysqli_query($mysqli, $insert);
			header('location:login_form.php');
		}
	}

}
;


?>


<!DOCTYPE html>
<!--[if IE 8]> <html lang="pt" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="pt" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="pt"> <!--<![endif]-->

<head>
	<title>Registro</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Fontes da Web -->
	<link rel='stylesheet' type='text/css'
		href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

	<!-- CSS Global Obrigatório -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- CSS Implementando Plugins -->
	<link rel="stylesheet" href="assets/plugins/animate.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">

	<!-- Estilo da Página CSS -->
	<link rel="stylesheet" href="assets/css/pages/page_log_reg_v2.css">

	<!-- Tema CSS -->
	<link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="assets/css/theme-skins/dark.css">

	<!-- Personalização CSS -->
	<link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
	<!--=== Parte do Conteúdo ===-->
	<div class="container">
		<!-- Bloco de Registro -->
		<div class="reg-block">
			<div class="reg-block-header">
				<h2>Cadastre-se</h2>
				<ul class="social-icons text-center">
					<li><a class="rounded-x social_facebook" data-original-title="Facebook" href="#"></a></li>
					<li><a class="rounded-x social_twitter" data-original-title="Twitter" href="#"></a></li>
					<li><a class="rounded-x social_googleplus" data-original-title="Google Plus" href="#"></a></li>
					<li><a class="rounded-x social_linkedin" data-original-title="Linkedin" href="#"></a></li>
				</ul>
				<p>Já possui uma conta? Clique <a class="color-green" href="page_login1.php">aqui</a> para fazer login
					na sua conta.</p>
			</div>

			<form method="post" action="">
   <div class="input-group margin-bottom-20">
      <span class="input-group-addon"><i class="fa fa-user"></i></span>
      <input type="text" class="form-control" placeholder="Nome de Usuário" name="nome">
   </div>
   <div class="input-group margin-bottom-20">
      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
      <input type="text" class="form-control" placeholder="Email" name="email">
   </div>
   <div class="input-group margin-bottom-20">
      <span class="input-group-addon"><i class="fa fa-lock"></i></span>
      <input type="password" class="form-control" placeholder="Senha" name="senha">
   </div>
   <div class="input-group margin-bottom-30">
      <span class="input-group-addon"><i class="fa fa-key"></i></span>
      <input type="password" class="form-control" placeholder="Confirmar Senha" name="cpassword">
   </div>
   <hr>

   <div class="checkbox">
      <label>
         <input type="checkbox">
         Ler <a target="_blank" href="page_terms.html">Termos e Condições</a>
      </label>
   </div>

   <div class="row">
      <div class="col-md-10 col-md-offset-1">
         <button type="submit" class="btn-u btn-block" name="submit">Registrar</button>
      </div>
   </div>
</form>

		</div>
		<!-- Fim do Bloco de Registro -->
	</div><!--/container-->
	<!--=== Fim da Parte do Conteúdo ===-->

	<!-- JS Global Obrigatório -->
	<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementando Plugins -->
	<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>
	<!-- Personalização JS -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<!-- JS Nível da Página -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function () {
			App.init();
		});
	</script>
	<script type="text/javascript">
		$.backstretch([
			"assets/img/bg/19.jpg",
			"assets/img/bg/18.jpg",
		], {
			fade: 1000,
			duration: 7000
		});
	</script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->
</body>

</html>