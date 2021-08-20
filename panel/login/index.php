<?php 
	session_start();

	ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	include('../../config.php');

	if(isset($_SESSION['userEmail']) || isset($_SESSION['userName'])) {
        header('Location: ../');
        return;
    }

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		if(!isset($_POST['email']) || empty($_POST['email'])){
			echo '<script>alert("Debes indicar tu email")</script>';
		} else if(!isset($_POST['password']) || empty($_POST['password'])){
			echo '<script>alert("Debes indicar tu contraseña")</script>';
		} else {
			$statement = $db->prepare('SELECT * FROM users WHERE email = :email');
			$statement->execute(array(
				'email' => $_POST['email']
			));

			$userDB = $statement->fetch();

			if(!$userDB) {
				echo '<script>alert("No existe un usuario con este email")</script>';
			} else {
				$password = hash('md5', $_POST['password']);
				if($password == $userDB['password']) {
					$_SESSION['userEmail'] = $userDB['email'];
					$_SESSION['userName'] = $userDB['name'];

					header('Location: ../');
				} else {
					echo '<script>alert("La contraseña es incorrecta")</script>';
				}
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Intro Arquitectura | Panel</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5M43SWV');</script>
    <!-- End Google Tag Manager -->
</head>
<body class="js-preloader">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5M43SWV";
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
					method='post' class="login100-form validate-form">
					<span class="login100-form-title p-b-70">
						Bienvenido
					</span>
					<span class="login100-form-avatar">
						<img src="../../images/icon/logo-black.png" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Ingresa tu correo">
						<input value="<?php echo (isset($_POST['email']) ? $_POST['email'] : '') ?>"
							class="input100" type="email" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Ingresa tu contraseña">
						<input value="<?php echo (isset($_POST['password']) ? $_POST['password'] : '') ?>"
							class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Contraseña"></span>
					</div>

					<div class="container-login100-form-btn">
						<button type='submit' class="login100-form-btn">
							Iniciar sesión
						</button>
					</div>

					<ul class="login-more p-t-190">
						<li class="m-b-8">
							<span class="txt1">
								¿No sabes como llegaste aquí?
							</span>

							<a href="../../" class="txt2">
								Regresar
							</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>