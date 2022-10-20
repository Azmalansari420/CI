<?php

class Slider extends CI_Controller
{
	///------author for login--

	function chech_admin_login()
	{
		$ci = & get_instance();
	    if(empty($ci->session->userdata('id')))
	    {
	      redirect(base_url().'admin');
	    }
	}

	//insert

	function add()
	{
		$this->chech_admin_login();
		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			if($_FILES['image']['name']!='')
			{
				$bimage = $_FILES['image']['name'];
				$path = 'media/uploads/slider/'.$bimage;
				move_uploaded_file($_FILES['image']['tmp_name'],$path);
			}

			else
			{
				$bimage = "";
			}

			$data['image'] = $bimage;
			
			$data['status'] = $this->input->post('status');			
			$data['addeddate'] = date('y-m-d h:i:sA');

			$this->crud->insert('slider',$data);

			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully saved.</div>');
			
			redirect('admin_con/slider/listing');	
		}

		$this->load->view('admin/slider/add');
	}


	//----listing list dekhney ke lia 

	function listing()
	{
		$this->chech_admin_login();
		$this->db->order_by("id desc");
		$data['ALLDATA'] = $this->crud->get_data('slider');
		$this->load->view('admin/slider/list',$data);
	}


	//--delete ke lia

	function delete()
	{
		$args=func_get_args();
		$data=$this->crud->selectDataByMultipleWhere('slider',array('id'=>$args[0]));
		$path = 'media/uploads/slider/'.$data[0]->image;
		@unlink($path);
		$this->crud->delete('slider',$args[0]);
		$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully deleted.</div>');
		redirect('admin_con/slider/listing');

	}


	//----------------edit

	function edit()
	{
		$this->chech_admin_login();
		$args=func_get_args();

		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			if($_FILES['image']['name']!='')
			{
				$image = $_FILES['image']['name'];
				$path = 'media/uploads/slider/'.$image;
				move_uploaded_file($_FILES['image']['tmp_name'],$path);
			}

			else
			{
				$image = $_POST['oldimage'];
			}

			$data['image'] = $image;
			
			$data['status'] = $this->input->post('status');						
			$data['modifieddate'] = date('y-m-d h:i:sA');

			$this->crud->update('slider',$args[0],$data);

			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully Updated.</div>');
		    redirect('admin_con/slider/listing');
		}

		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],'slider');
		$this->load->view('admin/slider/edit',$data);
	}





	//----------------view

	function view()
	{
		$this->chech_admin_login();
		$args=func_get_args();

		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],'slider');
		$this->load->view('admin/slider/view',$data);
	}


//---------------------status

	public function status_change()
	{
		if(isset($_POST['submit']))
		{						
			$id = $this->input->post('id');						
			$data['status'] = $this->input->post('status');		
			$this->db->update('slider',$data,array("id"=>$id));

			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully Updated.</div>');
		    redirect('admin_con/slider/listing');
		}

	}



	// public function statusupdate()
	// {	
	// 	//echo "string";

	// 	$data['status'] = $_GET['l_status'];

	// 	$this->crud->update('slider',$_GET['ld'],$data);

	// 	$this->listing();

	// }



}