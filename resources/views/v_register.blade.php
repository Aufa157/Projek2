{{-- <!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<style>
		
		.gradient-custom-3 {
		background: #84fab0;
		background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));
		background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
		}
		.gradient-custom-4 {
		background: #84fab0;
		background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));
		background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
		}	
	</style>
</head>

<body>
	<section class="vh-100 bg-image"
	style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
	<div class="mask d-flex align-items-center h-100 gradient-custom-3">
		<div class="container h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-12 col-md-9 col-lg-7 col-xl-6">
					<div class="card" style="border-radius: 15px;">
						<div class="card-body p-5">
							<h2 class="text-uppercase text-center mb-5">Create an account</h2>
							
							<form>
								
								<div class="form-outline mb-4">
									<input type="text" id="form3Example1cg" class="form-control form-control-lg" />
									<label class="form-label" for="form3Example1cg">Your Name</label>
								</div>
								
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>
				
                <div class="form-outline mb-4">
					<input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>
				
                <div class="form-outline mb-4">
					<input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
					<label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>
				
                <div class="form-check d-flex justify-content-center mb-5">
					<input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
					<label class="form-check-label" for="form2Example3g">
						I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
					</label>
                </div>
				
                <div class="d-flex justify-content-center">
					<button type="button"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register<a href="/login"></button>
                </div>
				
                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                    class="fw-bold text-body"><u>Login here</u></a></p>
					
				</form>
				
            </div>
		</div>
	</div>
</div>
</div>
</div>
</section>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset("SB Admin")}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset("SB Admin")}}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
					<div class="col-lg-5 d-none d-lg-block">
						<img src="{{asset("SB Admin")}}/img/pexels-photo-2962392.jpeg">
					</div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action="{{route('register')}}" method="POST">
								@csrf
                                <div class="form-group">
                                    <div>
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Nama" name="name" value="{{old('name')}}">
                                    </div>

                                    {{-- <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div> --}}
                                </div>
                                <div class="form-group">
                                    <div>
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Username" name="username" value="{{old('username')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address" name="email" value="{{old('email')}}">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password" name="repeat_password">
                                    </div>
                                </div>
                                {{-- <a href="/login" class="btn btn-primary btn-user btn-block">
                                    Register Account --}}
                                {{-- </a> --}}
                                <button type="submit" class="btn btn-primary btn-user btn-block">Register Account
                                    
                                </button>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                {{-- <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a> --}}
                            </form>
                            {{-- <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>