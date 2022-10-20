<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<title>Enquirys</title>

	<?php $this->load->view('admin/include/css');?>
	
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">

	<?php $this->load->view('admin/include/left-sidebar');?>



		<?php $this->load->view('admin/include/header'); ?>



		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="d-lg-flex align-items-center mb-4 gap-3">
					<div class="position-relative">
					  <ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item">
							<a href="#">Home / </a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Contact</li>
					  </ol>
					</div>
				  <div class="ms-auto">
				  	<a href="<?php echo base_url('admin_con/contact/listing');?>" class="btn btn-light radius-30 mt-2 mt-lg-0">
				  		<i class="bx bx-arrow-back"></i>Back
				  	</a>
				  </div>
				</div>



					<div class="card">
						<div class="card-body">
							<form method="post" class="row g-3" enctype="multipart/form-data">

								<div class="container">
									<div class="main-body">
										<div class="row">
											<div class="col-lg-12">
												<div class="card">
													<div class="card-body">
														<div class="row mb-3">
															<div class="col-sm-3">
																<h6 class="mb-0">Name</h6>
															</div>
															<div class="col-sm-9">
																<input type="text" class="form-control" name="name" value="<?php echo $EDITDATA[0]->name; ?>" disabled>
															</div>
														</div>
														<div class="row mb-3">
															<div class="col-sm-3">
																<h6 class="mb-0">Email</h6>
															</div>
															<div class="col-sm-9">
																<input type="text" class="form-control" name="email" value="<?php echo $EDITDATA[0]->email; ?>" disabled>
															</div>
														</div>

														<div class="row mb-3">
															<div class="col-sm-3">
																<h6 class="mb-0">Mobile</h6>
															</div>
															<div class="col-sm-9">
																<input type="text" class="form-control" name="mobile" value="<?php echo $EDITDATA[0]->mobile; ?>" disabled>
															</div>
														</div>

														<div class="row mb-3">
															<div class="col-sm-3">
																<h6 class="mb-0">Subject</h6>
															</div>
															<div class="col-sm-9">
																<input type="text" class="form-control" name="subject" value="<?php echo $EDITDATA[0]->subject; ?>" disabled>
															</div>
														</div>

														<div class="row mb-3">
															<div class="col-sm-3">
																<h6 class="mb-0">Message</h6>
															</div>
															<div class="col-sm-9">
																<textarea name="message" class="form-control" disabled>
																	<?php echo $EDITDATA[0]->message; ?>
																</textarea>
															</div>
														</div>

													</div>
												</div>
											
											</div>
										</div>
									</div>
								</div>


							</form>								

						</div>
					</div>
				
			</div>
		</div>
		<!--end page wrapper -->
		
	
	</div>
	<!--end wrapper-->

	<?php $this->load->view('admin/include/footer');?>



<script>
  CKEDITOR.replace( 'message' );
</script>

</body>
</html>