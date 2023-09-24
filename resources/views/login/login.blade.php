<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/assets/img/logo-smpn3sungaikakap.png" rel="icon">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	@include('login.vendor.head')
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form  id="" action="/admin-login/" method="post" class="login100-form validate-form" enctype="multipart/form-data">
					@csrf
					<span class="login100-form-title">
						<p>Masuk</p>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Masukan Email Dengan Benar!">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Masukan Password!">
						<input class="input100" type="password" name="password" id="passwordInput" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						  <i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						<span class="toggle-password" onclick="togglePasswordVisibility()">
						  <i class="fa fa-eye" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							masuk
						</button>
					</div>

					{{-- <div class="text-center p-t-12">
						<a class="txt2" href="#">
							Lupa Password?
						</a>
					</div> --}}

					{{-- <div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div> --}}
				</form>
			</div>
		</div>
	</div>
	
	

	
	@include('login.vendor.footer')

	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

	<script>
		function togglePasswordVisibility() {
		var passwordInput = document.getElementById("passwordInput");
		var togglePassword = document.querySelector(".toggle-password");
		
		if (passwordInput.type === "password") {
			passwordInput.type = "text";
			togglePassword.innerHTML = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
		} else {
			passwordInput.type = "password";
			togglePassword.innerHTML = '<i class="fa fa-eye" aria-hidden="true"></i>';
		}
	}
	</script>

<script>
	function togglePasswordVisibility() {
	  // Your password visibility toggle function
	}
  
	document.querySelector('.login100-form').addEventListener('submit', function (event) {
	event.preventDefault();
	const form = event.target;
	const formData = new FormData(form);

	fetch(form.action, {
		method: 'POST',
		body: formData,
		headers: {
			'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value,
		},
	})
	.then((response) => {
		if (!response.ok) {
			throw new Error('Email atau Password salah!');
		}
		return response.json();
	})
	.then((data) => {
		// Successful login
		Swal.fire({
			icon: 'success',
			title: 'Berhasil!',
			text: data.message,
		})
		.then(() => {
			window.location.href = '/admin/index';
		});
	})
	.catch((error) => {
		// Failed login
		let errorMessage = "Gagal melakukan login. Harap mengisi form terlebih dahulu.";
		
		if (error.message.includes("Unexpected token '<'")) {
			errorMessage = "Harap mengisi form terlebih dahulu.";
		} else {
			errorMessage = "Email atau Password salah!";
		}

		Swal.fire({
			icon: 'error',
			title: 'Gagal!',
			text: errorMessage,
		});
	});
});
</script>
</body>
</html>