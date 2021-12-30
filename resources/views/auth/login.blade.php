<!DOCTYPE html>
<html lang="en">
<head>
	<title>Connexion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('storage/login_fichiers/images/icons/favicon.ico') }} "/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('storage/login_fichiers/vendor/bootstrap/css/bootstrap.min.css') }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('storage/login_fichiers/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('storage/login_fichiers/fonts/iconic/css/material-design-iconic-font.min.css') }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('storage/login_fichiers/vendor/animate/animate.css') }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('storage/login_fichiers/vendor/css-hamburgers/hamburgers.min.css') }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('storage/login_fichiers/vendor/animsition/css/animsition.min.css') }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('storage/login_fichiers/vendor/select2/select2.min.css') }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('storage/login_fichiers/vendor/daterangepicker/daterangepicker.css') }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('storage/login_fichiers/css/util.css') }} ">
	<link rel="stylesheet" type="text/css" href="{{ asset('storage/login_fichiers/css/main.css') }} ">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-login100" style="background-image: url('/storage/login_fichiers/images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" action="{{ route('authenticate') }}" method="POST">

                @csrf

                <span class="login100-form-title p-b-37">
					Se connecter
				</span>
                @if (session('error'))
                    <div class="alert alert-danger">
                        <strong>Attention !</strong> {{ session('error') }}
                    </div>
                @endif

                <div class="card-body">

                    @if (session('error'))
                    <div class="alert alert-warning alert-dismissible">

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>

                        <strong> Attention !</strong> {{ session('error') }}
                    </div>
                    @endif
                </div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
                    <input class="input100" type="text" name="username" placeholder="username or email">
                    <span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
                    <input class="input100" type="password" name="pass" placeholder="password">
                    <span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit">
						Connexion
					</button>
				</div>
                <br>
                <div class="container-login100-form-btn">
                    <a href="">
                        <button class="login100-form-btn">
                            Retour
                        </button>
                    </a>

				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Se connecter avec
					</span>
				</div>

				<div class="flex-c p-b-112">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>

					<a href="#" class="login100-social-item">
						<img src="{{ asset('storage/login_fichiers/images/icons/icon-google.png') }} " alt="GOOGLE">
					</a>
				</div>

			</form>


		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{ asset('storage/login_fichiers/vendor/jquery/jquery-3.2.1.min.js') }} "></script>
<!--===============================================================================================-->
	<script src="{{ asset('storage/login_fichiers/vendor/animsition/js/animsition.min.js') }} "></script>
<!--===============================================================================================-->
	<script src="{{ asset('storage/login_fichiers/vendor/bootstrap/js/popper.js') }} "></script>
	<script src="{{ asset('storage/login_fichiers/vendor/bootstrap/js/bootstrap.min.js') }} "></script>
<!--===============================================================================================-->
	<script src="{{ asset('storage/login_fichiers/vendor/select2/select2.min.js') }} "></script>
<!--===============================================================================================-->
	<script src="{{ asset('storage/login_fichiers/vendor/daterangepicker/moment.min.js') }} "></script>
	<script src="{{ asset('storage/login_fichiers/vendor/daterangepicker/daterangepicker.js') }} "></script>
<!--===============================================================================================-->
	<script src="{{ asset('storage/login_fichiers/vendor/countdowntime/countdowntime.js') }} "></script>
<!--===============================================================================================-->
	<script src="{{ asset('storage/login_fichiers/js/main.js') }} "></script>

</body>
</html>
