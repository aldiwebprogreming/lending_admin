<?php 

	/**
	 * 
	 */
	class Galery extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->library('form_validation');
		}

		function galery(){

			$data['title'] = "Galery Product";
			$data['sub_title'] = "Galery Product";

			$data['galery'] = $this->db->get('tbl_galeri_product')->result_array();

			$this->load->view('template/header', $data);
			$this->load->view('admin/galery', $data);
			$this->load->view('template/footer');

		}

		function add_galery(){

		$this->load->helper(array('form', 'url'));

          $config['upload_path']          = './assets/gambar_galery/';
          $config['allowed_types']        = 'jpg|png';
          $config['max_size']             = 200000000;
          $config['file_name']           = '';
         
  		$this->load->library('upload', $config);

			$data['title'] = "Tambah Galery";
			$data['sub_title'] = "Tambah Galery Product";

			$this->load->view('template/header', $data);
			$this->load->view('admin/add_galery', $data);
			$this->load->view('template/footer');


			if ($this->input->post('kirim')) {
				
				if (!$this->upload->do_upload('foto')) {
					 $error = array('error' => $this->upload->display_errors());
				 $this->session->set_flashdata('message', 'swal("Error!", "Proses input data gagal", "error");');
	         	 redirect("galery/add_galery");

	         	} else {

				
				$data = [

					'nama_product' => $this->input->post('nama_product'),
					'keterangan' => $this->input->post('keterangan'),
					'gambar' => $this->upload->data('file_name'),  
					
				];

				$input - $this->db->insert('tbl_galeri_product', $data);
				$upload = array('upload_data' => $this->upload->data());
				$this->session->set_flashdata('message', 'swal("Sukses!", "Galery Product Berhasil Ditambah", "success");');
				redirect('galery/galery');
			}

			}


		}

		function edit(){


		$this->load->helper(array('form', 'url'));

          $config['upload_path']          = './assets/gambar_galery/';
          $config['allowed_types']        = 'jpg|png';
          $config['max_size']             = 200000000;
          $config['file_name']           = '';
         
  		$this->load->library('upload', $config);

			$id = $this->input->get('id');

			$data['title'] = "Edit Galery";
			$data['sub_title'] = "Edit Galery";

			$data['galery'] = $this->db->get_where('tbl_galeri_product', array('id' => $id))->result_array();

			$this->load->view('template/header', $data);
			$this->load->view('admin/edit_galery', $data);
			$this->load->view('template/footer');


			if ($this->input->post('edit')) {
				
				if (!$this->upload->do_upload('foto')) {
					 $error = array('error' => $this->upload->display_errors());
				 $this->session->set_flashdata('message', 'swal("Error!", "Proses input data gagal", "error");');
	         	 redirect("galery/add_galery");

	         	} else {

				
				$data = [

					'nama_product' => $this->input->post('nama_product'),
					'keterangan' => $this->input->post('keterangan'),
					'gambar' => $this->upload->data('file_name'),  
					
				];

				
				$this->db->where('id', $id);
				$this->db->update('tbl_galeri_product', $data);
				$upload = array('upload_data' => $this->upload->data());
				$this->session->set_flashdata('message', 'swal("Sukses!", "Galery Product Berhasil Diubah", "success");');
				redirect('galery/galery');
			}

			}


		}

		function hapus(){

			$id = $this->input->get('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_galeri_product');
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil dihapus", "success");');
				redirect('galery/galery');
		}

	}

 ?>