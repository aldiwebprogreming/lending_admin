<?php 

	/**
	 * 
	 */
	class Promo extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->library('form_validation');

		}

		function promo(){

			$data['title'] = "Promo";
			$data['sub_title'] = "Promo";

			$data['promo'] = $this->db->get('tbl_promo')->result_array();
			$data['num_promo'] = $this->db->get('tbl_promo')->num_rows();



			$this->load->view('template/header', $data);
			$this->load->view('admin/promo', $data);
			$this->load->view('template/footer');

		}

		function add_promo(){

		$this->load->helper(array('form', 'url'));

          $config['upload_path']          = './assets/gambar_promo/';
          $config['allowed_types']        = 'jpg|png';
          $config['max_size']             = 200000000;
          $config['file_name']           = '';
         
  		$this->load->library('upload', $config);

			$data['title'] = "Tambah Promo";
			$data['sub_title'] = "Tambah Promo";

			$rand = mt_rand(1000, 10000);
            $string = "PROMO";
            $data['kd_promo'] = $string.$rand;

			$this->load->view('template/header', $data);
			$this->load->view('admin/add_promo', $data);
			$this->load->view('template/footer');

			if ($this->input->post('kirim')) {

				if (!$this->upload->do_upload('foto')) {
					 $error = array('error' => $this->upload->display_errors());
				 $this->session->set_flashdata('message', 'swal("Error!", "Proses input data gagal", "error");');
	         	 redirect("promo/add_promo");

	         	} else {

				
				$data = [

					'kd_promo' => $this->input->post('kd_promo'),
					'nama_promo' => $this->input->post('nama_promo'),
					'judul' => $this->input->post('judul'),
					'sub_judul' => $this->input->post('sub_judul'),
					'start_promo' => $this->input->post('start_promo'),
					'end_promo' => $this->input->post('end_promo'),
					'foto' => $this->upload->data('file_name'),  

				];

				$input - $this->db->insert('tbl_promo', $data);
				$upload = array('upload_data' => $this->upload->data());
				$this->session->set_flashdata('message', 'swal("Sukses!", "Promo Berhasil Ditambah", "success");');
				redirect('promo/promo');
			}
		}

		}

		function edit(){

		$this->load->helper(array('form', 'url'));

          $config['upload_path']          = './assets/gambar_promo/';
          $config['allowed_types']        = 'jpg|png';
          $config['max_size']             = 200000000;
          $config['file_name']           = '';
         
  		$this->load->library('upload', $config);

			$data['title'] = "Edit Promo";
			$data['sub_title'] = "Edit sPromo";

			$id = $this->input->get('id');
			$data['det_promo'] = $this->db->get_where('tbl_promo', array('id' => $id))->result_array();

			$this->load->view('template/header', $data);
			$this->load->view('admin/edit_promo', $data);
			$this->load->view('template/footer');


			if ($this->input->post('edit')) {


				if (!$this->upload->do_upload('foto')) {
					 $error = array('error' => $this->upload->display_errors());
				 $this->session->set_flashdata('message', 'swal("Error!", "Proses input data gagal", "error");');
	         	 redirect("promo/edit");

	         	} else {

				
				$data = [

					'kd_promo' => $this->input->post('kd_promo'),
					'nama_promo' => $this->input->post('nama_promo'),
					'judul' => $this->input->post('judul'),
					'sub_judul' => $this->input->post('sub_judul'),
					'start_promo' => $this->input->post('start_promo'),
					'end_promo' => $this->input->post('end_promo'),
					'foto' => $this->upload->data('file_name'),  

				];

				$id = $this->input->get('id');

				$this->db->where('id', $id);
				$this->db->update('tbl_promo', $data);
				$upload = array('upload_data' => $this->upload->data());
				$this->session->set_flashdata('message', 'swal("Sukses!", "Promo berhasil diubah", "success");');
				redirect('promo/promo');
			}

				
			}
		}

		function hapus(){

			$id = $this->input->get('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_promo');
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil dihapus", "success");');
				redirect('promo/promo');
		}
	}

 ?>