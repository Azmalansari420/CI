<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<title>Slider List</title>

	<?php $this->load->view('admin/include/css');?>
	
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">


		<?php $this->load->view('admin/include/left-sidebar');?>

		<?php $this->load->view('admin/include/header'); ?>


		<div class="page-wrapper">
			<div class="page-content">
				<div class="d-lg-flex align-items-center mb-4 gap-3">
					<div class="position-relative">
					  <ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item">
							<a href="#">Home / </a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Slider</li>
					  </ol>
					</div>
				  <div class="ms-auto">
				  	<a href="<?php echo base_url('admin_con/slider/add');?>" class="btn btn-light radius-30 mt-2 mt-lg-0">
				  		<i class="bx bxs-plus-square"></i>Add New Slider
				  	</a>
				  </div>
				</div>


				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<?php echo $this->session->flashdata('message') ?>
							
							<table id="example2" class="table table-striped table-bordered">

								<thead>
									<tr>
										<th>#</th>
										<th>Image</th>
			                            <th>Status</th>
										<th>Action</th>
									</tr>
								</thead>

								<tbody>
							<?php $i=0;
	                        foreach($ALLDATA as $data)
	                         { $i++; 

	                         ?> 
									<tr>
										<td><?php echo $i; ?></td>
										<td>
											<img src="<?php echo base_url(); ?>media/uploads/slider/<?php echo $data->image; ?>" style="width:150px;">
										</td>
										
			                            <td>
			                            	<form method="post" action="<?php echo base_url('admin_con/slider/status_change'); ?>" enctype="multipart/form-data">
			                            		<input type="hidden" name="id" value="<?=$data->id ?>">

						                            	<select class="form-select" name="status"> 
											               <option value="1" <?php if($data->status==1)echo'selected'; ?>>Show</option>
											               <option value="0" <?php if($data->status==0)echo'selected'; ?>>Hide</option>
											           </select>


									           			<input class="btn btn-light" type="submit" name="submit" value="Update">


							           		</form>
										</td>

										<!-- -----------edit-------- -->
										<td>
											<div class="d-flex order-actions">

												<!-- <a href="<?php echo base_url('admin_con/slider/view/'.$data->id); ?>" class="">
													<i class="bx bx-show"></i>
											    </a> -->

												<a href="<?php echo base_url('admin_con/slider/edit/'.$data->id); ?>" class=""><i class="bx bxs-edit"></i></a>

												<a href="<?php echo base_url('admin_con/slider/delete/'.$data->id); ?>" onclick="return confirm('are you sure do you want to delete this record')" class="ms-3"><i class="bx bxs-trash"></i></a>
											</div>
										</td>
										
									</tr>
									
							<?php } ?>
								</tbody>
								
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->	
	</div>
	<!--end wrapper-->
<?php $this->load->view('admin/include/footer');?>


</body>
</html>

