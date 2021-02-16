<?php 


class Visitor extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function data_online(){
		$data['title'] = "Data Online";
		$data['sub_title'] = "Data Online";

		$bataswaktu = time() -300;
        $data['online']  = $this->db->query("SELECT * FROM tbl_visitor WHERE online > '".$bataswaktu."'")->result_array();

		$this->load->view('template/header',$data);
		$this->load->view('admin/data_online', $data);
		$this->load->view('template/footer');
	}

	function data_visitor(){

		$data['title'] = "Data Visitor";
		$data['sub_title'] = "Data Visitor";

		$bataswaktu = time() -300;
        $data['online']  = $this->db->query("SELECT * FROM tbl_visitor WHERE online > '".$bataswaktu."'")->result_array();

		$data['data_visitor'] = $this->db->get('tbl_visitor')->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('admin/data_visitor', $data);
		$this->load->view('template/footer');


	}

	function pengunjunghariini(){

		$data['title'] = "Data Pengungjung";
		$data['sub_title'] = "Data Pengungjung Hari Ini";

		
		$bataswaktu = time() -300;
        $data['online']  = $this->db->query("SELECT * FROM tbl_visitor WHERE online > '".$bataswaktu."'")->result_array();

		$date = date('Y-m-d');
		$data['pengunjung'] =  $this->db->query("SELECT * FROM tbl_visitor WHERE date ='".$date."' GROUP BY ip")->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('admin/data_pengunjunghariini', $data);
		$this->load->view('template/footer');


	}
}