<!doctype html>
<html lang="en">

	<title>Login</title>
	<?php $this->load->view('admin/include/css');?>
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="page-wrapper">
		<div class="page-content">
			<div class="row">
				<div class="col-xl-7 mx-auto">
					<div class="card border-top border-0 border-4 border-white">
						<div class="card-body p-5">
							<div class="card-title text-center"><i class="bx bxs-user-circle text-white font-50"></i>
								<h5 class="mb-5 mt-2 text-white">User Login</h5>
							</div>
							<hr>
							 <?php echo $this->session->flashdata('message'); ?>
							 
							<form method="post" class="row g-3">
								<div class="col-12">
									<label for="inputLastEnterUsername" class="form-label">Enter Username</label>
									<div class="input-group input-group-lg"> 
										<span class="input-group-text"><i class="bx bxs-user"></i></span>
										<input type="text" name="username" class="form-control border-start-0" id="inputLastEnterUsername" placeholder="Enter Username">
									</div>
								</div>
								<div class="col-12">
									<label for="inputLastEnterPassword" class="form-label">Enter Password</label>
									<div class="input-group input-group-lg"> <span class="input-group-text"><i class="bx bxs-lock-open"></i></span>
										<input type="password" name="password" class="form-control border-start-0" id="inputLastEnterPassword" placeholder="Enter Password">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="gridCheck3">
										<label class="form-check-label" for="gridCheck3">Check me out</label>
									</div>
								</div>
							
								<div class="col-12">
									<div class="d-grid">
										<button type="submit" name="submit" class="btn btn-light btn-lg px-5"><i class="bx bxs-lock-open"></i>Login</button>
									</div>
								</div>								
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

<?php $this->load->view('admin/include/footer');?>




</body>
</html>