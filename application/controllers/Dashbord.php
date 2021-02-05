<?php 

	/**
	 * 
	 */
	class Dashbord extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
		
			$this->load->library('form_validation');
		}

		function index(){
				
			$data['title'] ="Dashboard";
			$data['sub_title'] = "Dashboard";

			$this->load->view('template/header', $data);
			$this->load->view('admin/dashboard');
			$this->load->View('template/footer', $data);

		}
	}


 ?>