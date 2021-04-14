<?php 

	/**
	 * 
	 */
	class Promo extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			if ($this->session->userdata('username') == NULL) {
			redirect('login/');
			}
			$this->load->library('form_validation');

		}

		function promo(){

			

		// var_dump($data['num_promo']);

			// // $data['promo'] = $this->db->get_where('tbl_promo', array('start_promo'=>$tgl))->result_array();
			// var_dump($data['promo']);
				
			// $data['num_promo'] = $this->db->get('tbl_promo')->num_rows();



			// $this->load->view('template/header', $data);
			// $this->load->view('admin/promo', $data);
			// $this->load->view('template/footer');

		}

	function data_promo(){

			$data['title'] = "Data Promo";
			$data['sub_title'] = "Data Promo";

			$data['promo'] = $this->db->get('tbl_promo')->result_array();
			foreach ($data['promo'] as $date_hasil) {
				 $tgl1 =  $date_hasil['end_promo'];
				$tgl = date('Y-m-d');
	$this->db->where('start_promo AND end_promo BETWEEN "'. date('Y-m-d', strtotime($tgl)). '" and "'. date('Y-m-d', strtotime($tgl1)).'"');	

	$data['num_promo'] = $this->db->get('tbl_promo',1)->result_array();
	}
	
			$data['promo'] = $this->db->get('tbl_promo')->result_array();

			$this->load->view('template/header', $data);
			$this->load->view('admin/promo', $data);
			$this->load->view('template/footer');
	}

		function add_promo(){

		$this->form_validation->set_rules('start_promo', 'date start promo', 'is_unique[tbl_promo.start_promo]');

		if ($this->form_validation->run() == FALSE) {

			$data['title'] = "Tambah Promo";
			$data['sub_title'] = "Tambah Promo";
			$rand = mt_rand(1000, 10000);
            $string = "PROMO";
            $data['kd_promo'] = $string.$rand;

			$this->load->view('template/header', $data);
			$this->load->view('admin/add_promo', $data);
			$this->load->view('template/footer');
		} else {

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
				redirect('promo/data_promo');
			}
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
			$data['sub_title'] = "Edit Promo";

			$id = $this->input->get('id');
			$data['det_promo'] = $this->db->get_where('tbl_promo', array('id' => $id))->result_array();

			$this->load->view('template/header', $data);
			$this->load->view('admin/edit_promo', $data);
			$this->load->view('template/footer');


			if ($this->input->post('edit')) {


				if (!$this->upload->do_upload('foto')) {
						
						$data = [

					'kd_promo' => $this->input->post('kd_promo'),
					'nama_promo' => $this->input->post('nama_promo'),
					'judul' => $this->input->post('judul'),
					'sub_judul' => $this->input->post('sub_judul'),
					'start_promo' => $this->input->post('start_promo'),
					'end_promo' => $this->input->post('end_promo'),
					

				];
				$this->db->where('id', $id);
				$this->db->update('tbl_promo', $data);
				$this->session->set_flashdata('message', 'swal("Sukses!", "Promo berhasil diubah", "success");');
				redirect('promo/data_promo');

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
				$delet_images = $this->db->get_where('tbl_promo',array('id' => $id))->row();
				$target = $delet_images->foto;
				unlink("./assets/gambar_promo/$target");
				$this->db->where('id', $id);
				$this->db->update('tbl_promo', $data);
				
				$upload = array('upload_data' => $this->upload->data());
				$this->session->set_flashdata('message', 'swal("Sukses!", "Promo berhasil diubah", "success");');
				redirect('promo/data_promo');
			}

				
			}
		}

		function hapus(){

			$id = $this->input->get('id');

			$delet_images = $this->db->get_where('tbl_promo',array('id' => $id))->row();
			$target = $delet_images->foto;
			unlink("./assets/gambar_promo/$target");
			$this->db->where('id', $id);
			$this->db->delete('tbl_promo');
			

			$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil dihapus", "success");');
				redirect('promo/data_promo');
		}

		

	}

 ?>