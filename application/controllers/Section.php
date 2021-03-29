<?php 

	/**
	 * 
	 */
	class Section extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
		}


		function index(){
			$data['title'] = "Section";
			$data['sub_title'] = "Data Section";

			$this->load->view('template/header', $data);
			$this->load->view('admin/data_section', $data);
			$this->load->view('template/footer');

		}

		function tambah_section(){

			$data['title'] = "Tambah Section";
			$data['sub_title'] = "Tambah Data Section";

			$this->load->view('template/header', $data);
			$this->load->view('admin/add_section', $data);
			$this->load->view('template/footer');

			

		}
	}

 ?>