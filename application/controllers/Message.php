<?php 

	/**
	 * 
	 */
	class Message extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			if ($this->session->userdata('username') == NULL) {
			redirect('login/');
			}
		}

		function message(){

			$data['title'] = "Data Pesan";
			$data['sub_title'] = "Data Pesan";

			$data['pesan'] = $this->db->get('tbl_pesan')->result_array();

			$this->load->view('template/header', $data);
			$this->load->view('admin/message', $data);
			$this->load->view('template/footer');
		}


		function hapus(){

			$id = $this->input->get('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_pesan');
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil dihapus", "success");');
				redirect('message/message');
		}


		function get_message(){
			$tgl = date('Y-m-d');

			$data['get_message'] = $this->db->query("SELECT * FROM tbl_pesan WHERE date = '$tgl' ORDER BY id DESC")->result_array();
			
			$data['pesan'] = $this->load->view('admin/get_pesan', $data);
		}

		function get_row(){
			$tgl = date('Y-m-d');

			$row = $this->db->get_where('tbl_pesan',array('date' => $tgl ))->num_rows();
			echo $row;
		}

		function detail_message(){

			$data['title'] = "Detail Message";
			$data['sub_title'] = "Detail Message";
			$id = $this->input->get('id');
			$up = [
				'status' => 1
			];
			$this->db->where('id', $id);
			$this->db->update('tbl_pesan', $up);

			$data['detail'] = $this->db->get_where('tbl_pesan',  array('id' => $id))->result_array();
			$this->load->view('template/header', $data);
			$this->load->view('admin/detail_message', $data);
			$this->load->view('template/footer', $data);

		}
	}
		
 ?>