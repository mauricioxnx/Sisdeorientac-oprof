<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->

<head>
    <title>Advanced Layout Forms | Unify - Responsive Website Template</title>

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
</head>

<body>
    <div class="wrapper">
        <!--=== Header ===-->
        <div class="header">
            <div class="container">
                <!-- Logo -->
                <a class="logo" href="index.html">
                    <img src="assets/img/logo1-default.png" alt="Logo">
                </a>
                <!-- End Logo -->





<div class="container">
    <div class="row">
        <div class="col-sm-4 md-margin-bottom-10">
            <div class="input-group">
                <span class="input-group-addon"><i class="icon-append fa fa-user"></i></span>
                <input type="text" placeholder="Qual emprego você está procurando" class="form-control">
            </div>
        </div>
        <div class="col-sm-4 md-margin-bottom-10">
            <div class="input-group">
                <span class="input-group-addon"><i class="icon-append fa fa-comment"></i></span>
                <input type="text" placeholder="Onde você gostaria de trabalhar" class="form-control">
            </div>
        </div>
       
<br/><br/><br/><br/><br/>
        <div class="col-sm-4 md-margin-bottom-10">
            <div class="input-group">
                <span class="input-group-addon"><i class="icon-prepend fa fa-question-circle"></i></span>
                <input type="text" placeholder="Onde você gostaria de trabalhar" class="form-control">
            </div>
        </div>

        <div class="col-sm-4 md-margin-bottom-10">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                <input type="text" placeholder="Onde você gostaria de trabalhar" class="form-control">
            </div>
        </div>

<br/><br/><br/><br/><br/>

        

        <div class="col-sm-4 md-margin-bottom-10">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                <input type="text" placeholder="Qual emprego você está procurando" class="form-control">
            </div>
        </div>

        <div class="col-sm-4 md-margin-bottom-10">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                <input type="text" placeholder="Onde você gostaria de trabalhar" class="form-control">
            </div>
        </div>
<br/><br/><br/><br/><br/>
        <div class="col-sm-4">
            <button type="button" class="btn-u btn-block btn-u-dark">Buscar</button>
        </div>
    </div>
</div>








                <!-- Order Form -->
					<form action="assets/php/demo-order.php" method="post" enctype="multipart/form-data" id="sky-form1" class="sky-form">
						<header>Order Form</header>

						<fieldset>
							<div class="row">
								<section class="col col-6">
									<label class="input">
										<i class="icon-append fa fa-user"></i>
										<input type="text" name="name" placeholder="Name">
									</label>
								</section>
								<section class="col col-6">
									<label class="input">
										<i class="icon-append fa fa-briefcase"></i>
										<input type="text" name="company" placeholder="Company">
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
										<input type="tel" name="phone" placeholder="Phone">
									</label>
								</section>
							</div>
						</fieldset>

						<fieldset>
							<div class="row">
								<section class="col col-6">
									<label class="select">
										<select name="interested">
											<option value="none" selected disabled>Interested in</option>
											<option value="design">design</option>
											<option value="development">development</option>
											<option value="illustration">illustration</option>
											<option value="branding">branding</option>
											<option value="video">video</option>
										</select>
										<i></i>
									</label>
								</section>
								<section class="col col-6">
									<label class="select">
										<select name="budget">
											<option value="0" selected disabled>Budget</option>
											<option value="less than 5000$">less than 5000$</option>
											<option value="5000$ - 10000$">5000$ - 10000$</option>
											<option value="10000$ - 20000$">10000$ - 20000$</option>
											<option value="more than 20000$">more than 20000$</option>
										</select>
										<i></i>
									</label>
								</section>
							</div>

							<div class="row">
								<section class="col col-6">
									<label class="input">
										<i class="icon-append fa fa-calendar"></i>
										<input type="text" name="start" id="start" placeholder="Expected start date">
									</label>
								</section>
								<section class="col col-6">
									<label class="input">
										<i class="icon-append fa fa-calendar"></i>
										<input type="text" name="finish" id="finish" placeholder="Expected finish date">
									</label>
								</section>
							</div>

							<section>
								<label for="file" class="input input-file">
									<div class="button"><input type="file" name="file" multiple onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" placeholder="Include some file" readonly>
								</label>
							</section>

							<section>
								<label class="textarea">
									<i class="icon-append fa fa-comment"></i>
									<textarea rows="5" name="comment" placeholder="Tell us about your project"></textarea>
								</label>
							</section>
						</fieldset>
						<footer>
							<button type="submit" class="btn-u">Send request</button>
							<div class="progress"></div>
						</footer>
						<div class="message">
							<i class="rounded-x fa fa-check"></i>
							<p>Thanks for your order!<br>We'll contact you very soon.</p>
						</div>
					</form>
					<!-- End Order Form -->
