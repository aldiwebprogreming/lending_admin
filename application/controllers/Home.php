<?php 

	/**
	 * 
	 */
	class Home extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		function data_home(){

			$data['cek'] = $this->db->get_where('tbl_default')->num_rows();

			$data['default'] = $this->db->get('tbl_default')->result_array();
			$data['title'] = "Home Default";
			$data['sub_title'] = "Data Home Default";
			$this->load->view('template/header', $data);
			$this->load->view('admin/data_homeDefault', $data);
			$this->load->view('template/footer');

		} 

		function add_default(){
				
			$cek =$this->db->get('tbl_default')->num_rows();
			if ($cek >= 1) {
				redirect('home/data_home');
			}

			$this->load->helper(array('form', 'url'));

          $config['upload_path']          = './assets/gambar_default/';
          $config['allowed_types']        = 'jpg|png';
          $config['max_size']             = 200000000;
          $config['file_name']           = '';
         
  		$this->load->library('upload', $config);

			$data['title'] = "Tambah Home Default";
			$data['sub_title'] = "Tambah Home Default";

			$this->load->view('template/header', $data);
			$this->load->view('admin/add_default', $data);
			$this->load->view('template/footer');


			if ($this->input->post('kirim')) {
				
				if (!$this->upload->do_upload('foto')) {
					 $error = array('error' => $this->upload->display_errors());
					 echo $error;

				 $this->session->set_flashdata('message', 'swal("Error!", "Proses input data gagal", "error");');
	         	 redirect("home/add_default");

	         	} else {

	         		$judul = $this->input->post('judul');
	         		$sub_judul = $this->input->post('sub_judul');
	         		
				$data = [

					'judul' => $judul,
					'sub_judul' => $sub_judul,
					'images' => $this->upload->data('file_name'),  
					
				];

				$input - $this->db->insert('tbl_default', $data);
				$upload = array('upload_data' => $this->upload->data());
				$this->session->set_flashdata('message', 'swal("Sukses!", "Galery Product Berhasil Ditambah", "success");');
				redirect('home/data_home');
			}
		

			}


		}


	function edit(){


		$this->load->helper(array('form', 'url'));

          $config['upload_path']          = './assets/gambar_default/';
          $config['allowed_types']        = 'jpg|png';
          $config['max_size']             = 200000000;
          $config['file_name']           = '';
         
  		$this->load->library('upload', $config);

			$id = $this->input->get('id');

			$data['title'] = "Edit Home Default";
			$data['sub_title'] = "Edit  Default";

			$data['default'] = $this->db->get_where('tbl_default', array('id' => $id))->result_array();

			$this->load->view('template/header', $data);
			$this->load->view('admin/edit_homeDefault', $data);
			$this->load->view('template/footer');


			if ($this->input->post('edit')) {
				
				if (!$this->upload->do_upload('foto')) {

					
					 $data = [

					'judul' => $this->input->post('judul'),
					'sub_judul' => $this->input->post('sub_judul'),
					
				];
				$this->db->where('id', $id);
				$this->db->update('tbl_default', $data);
				$this->session->set_flashdata('message', 'swal("Sukses!", "Berhasil Diubah", "success");');
				redirect('home/data_home');
			
	        
	         		} else {

	         		
					
				$data = [
					'judul' => $this->input->post('judul'),
					'sub_judul' => $this->input->post('sub_judul'),
					'images' => $this->upload->data('file_name'),  
					
				];


				$delet_img = $this->db->get_where('tbl_default', array('id' =>$id ))->row();
				$img = $delet_img->images;
				unlink("./assets/gambar_default/$img");
				$this->db->where('id', $id);
				$this->db->update('tbl_default', $data);
				$upload = array('upload_data' => $this->upload->data());
				$this->session->set_flashdata('message', 'swal("Sukses!", "Berhasil Diubah", "success");');
				redirect('home/data_home');
			}
		}

			}

			function hapus(){

			$id = $this->input->get('id');
			$delet_images = $this->db->get_where('tbl_default',array('id' => $id))->row();
			$target = $delet_images->images;
			unlink("./assets/gambar_default/$target");

			$this->db->where('id', $id);
			$this->db->delete('tbl_default');
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil dihapus", "success");');
				redirect('home/data_home');
		}


	}


 ?>