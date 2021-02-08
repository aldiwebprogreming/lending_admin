<?php 

	/**
	 * 
	 */
	class Message extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
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
	}
		
 ?>