<?php 

/**
 * 
 */
class Operator extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();

		$this->load->library('form_validation');
	}

	function operator(){

		$data['title'] = "Data Operator";
		$data['sub_title'] = "Data Operator";
		$data['operator'] = $this->db->get('tbl_operator')->result_array();
		$this->load->view('template/header', $data);
		$this->load->view('admin/operator', $data);
		$this->load->view('template/footer');

	}


	function add_operator(){

		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_rules('password2', 'repead password', 'trim|required|matches[password]');

		if ($this->form_validation->run()== FALSE) {

			$data['title'] = "Tambah Operator";
			$data['sub_title'] = "Tambah Operator";

			$this->load->view('template/header', $data);
			$this->load->view('admin/add_operator', $data);
			$this->load->view('template/footer');
			
		} else {

			if ($this->input->post('kirim')) {

			$pass = $this->input->post('password');
			$pass_hash = password_hash($pass, PASSWORD_DEFAULT);
			
			$data = [
				'username' => $this->input->post('username'),
				'pass' => $pass_hash
			];

			$this->db->insert('tbl_operator', $data);
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data Operator Berhasil Ditambah", "success");');
				redirect('operator/operator');
			}
		}
		}

		function hapus(){


			$id = $this->input->get('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_operator');
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil dihapus", "success");');
				redirect('operator/operator');
		}

		
	

}


 ?>