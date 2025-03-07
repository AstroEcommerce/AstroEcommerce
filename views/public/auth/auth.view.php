<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/login.css">
		
</head>
<body>
    
<?php include_once('./views/layout/public/header.php'); ?>

<div class="container" id="container">
	<div class="form-container sign-up-container ">
		<form action="#">
			<h1 class="mt-5 mt-md-0">Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="number" placeholder="Mobile Number" />
			<input type="date" placeholder="Date of Birth" />
			<input type="password" placeholder="Password" />
			<input type="password" placeholder="Confirm Password" />
			
			
      <a href="javascript:void(0)" class="d-block d-md-none mt-3 a-design" id="signIn2">if you already have an account . <strong>Sign In</strong></a>
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1 class="mt-5 mt-md-0">Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
            <a href="javascript:void(0)" class="d-block d-md-none mt-3 a-design" id="signUp2">if you don't have an account . <strong>Sign Up</strong></a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container d-none d-md-block">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
       $(document).ready(function () {
        $("#signUp").click(function () {
            $("#container").addClass("right-panel-active");
        });

        $("#signIn").click(function () {
            $("#container").removeClass("right-panel-active");
        });
    });
    $(document).ready(function () {
        function toggleForms() {
            if ($(window).width() <= 576) {
                $(".sign-in-container").show();
                $(".sign-up-container").hide();

                $("#signUp, #signUp2").click(function () {
                    $(".sign-in-container").hide();
                    $(".sign-up-container").show();
                });

                $("#signIn, #signIn2").click(function () {
                    $(".sign-up-container").hide();
                    $(".sign-in-container").show();
                });
            } else {
                $(".sign-in-container").show();
                $(".sign-up-container").show();
            }
        }

        toggleForms();
        $(window).resize(toggleForms);
    });
</script>

<script src="/public/js/navbar.js"></script>

</body>
</html>