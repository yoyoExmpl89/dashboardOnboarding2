<!-- Loader -->
		<div id="loading">
			<img src="<?php echo base_url('assets/img/loader1.svg" class="loader-img');?>" alt="Loader">
		</div>

		<!-- Main-signin-wrapper -->
		<div class="main-signin-wrapper">
			<div class="row text-center pl-0 pr-0 ml-0 mr-0">
				<div class="col-lg-3 d-block mx-auto">
					<div class="card">
						<div class="card-body">
							<img src="<?php echo base_url('assets/img/brand/logo-trimegah.png');?>" class="mb-3" alt="Logo">
							
							<form action="<?php echo base_url().'login/auth'?>" method="post" class="text-left mt-3">
								<div class="form-group">
									<label>Email</label> <input class="form-control" id="email" name="email"  placeholder="Enter your email" type="text">
								</div>
								<div class="form-group">
									<label>Password</label> <input class="form-control" id="password" name="password"  placeholder="Enter your password" type="password">
								</div><button class="btn btn-main-primary btn-block">Sign In</button>
							</form>
							<!--<div class="main-signin-footer mg-t-5">
								<p><a href="">Forgot password?</a></p>
								<p>Don't have an account? <a href="page-signup.html">Create an Account</a></p>
							</div>-->
						</div>
					</div>
				</div>
			</div>
		</div>