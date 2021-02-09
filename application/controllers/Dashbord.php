<?php 

	/**
	 * 
	 */
	class Dashbord extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			if ($this->session->userdata('username') == NULL) {
			redirect('login/');
			}
			$this->load->library('form_validation');
		}

		function index(){
				
			$data['title'] ="Dashboard";
			$data['sub_title'] = "Dashboard";

			$data['product'] = $this->db->get('tbl_galeri_product')->num_rows();
			$data['message'] = $this->db->get('tbl_pesan')->num_rows();
			$this->load->view('template/header', $data);
			$this->load->view('admin/dashboard',$data);
			$this->load->View('template/footer', $data);

		}

		
	}


 ?>