<?php 

	/**
	 * 
	 */
	class Testimonials extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		function testimonial(){

			$data['title'] = "Data testimonial";
			$data['sub_title'] = "Data Testimonials";

			$data['testimonial'] = $this->db->get('tbl_testimonial')->result_array();

			$this->load->view('template/header', $data);
			$this->load->view('admin/testimonial', $data);
			$this->load->view('template/footer');


		}

		function add_testimonial(){

		$this->load->helper(array('form', 'url'));

          $config['upload_path']          = './assets/gambar_testimoni/';
          $config['allowed_types']        = 'jpg|png';
          $config['max_size']             = 200000000;
          $config['file_name']           = '';
         
  		$this->load->library('upload', $config);

			$data['title'] = "Tambah Testimonial";
			$data['sub_title'] = "Tambah Testimonial";

			$this->load->view('template/header', $data);
			$this->load->view('admin/add_testimonial', $data);
			$this->load->view('template/footer');


			if ($this->input->post('kirim')) {

				if (!$this->upload->do_upload('foto')) {
					 $error = array('error' => $this->upload->display_errors());
				 $this->session->set_flashdata('message', 'swal("Error!", "Proses input data gagal", "error");');
	         	 redirect("testimonials/add_testimonal");

	         	} else {

				
				$data = [

					'nama_user' => $this->input->post('nama_user'),
					'ket_testimonial' => $this->input->post('keterangan'),
					'foto' => $this->upload->data('file_name'), 

					
				];

				$input - $this->db->insert('tbl_testimonial', $data);
				$upload = array('upload_data' => $this->upload->data());
				$this->session->set_flashdata('message', 'swal("Sukses!", "Data Testimonial Berhasil Ditambah", "success");');
				redirect('testimonials/testimonial');
			}

			}


			}


			function hapus(){

				$id = $this->input->get('id');
				$this->db->where('id', $id);
				$this->db->delete('tbl_testimonial');
				$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil dihapus", "success");');
					redirect('testimonials/testimonial');
			}

	function edit(){


				$this->load->helper(array('form', 'url'));

		          $config['upload_path']          = './assets/gambar_testimoni/';
		          $config['allowed_types']        = 'jpg|png';
		          $config['max_size']             = 200000000;
		          $config['file_name']           = '';
		         
		  		$this->load->library('upload', $config);

					$id = $this->input->get('id');

					$data['title'] = "Edit Testimonial";
					$data['sub_title'] = "Edit Testimonial";

					$data['testimoni'] = $this->db->get_where('tbl_testimonial', array('id' => $id))->result_array();

					$this->load->view('template/header', $data);
					$this->load->view('admin/edit_testimonial', $data);
					$this->load->view('template/footer');


					if ($this->input->post('edit')) {
						
						if (!$this->upload->do_upload('foto')) {
							 $error = array('error' => $this->upload->display_errors());
						 $this->session->set_flashdata('message', 'swal("Error!", "Proses input data gagal", "error");');
			         	 redirect("testimonials/add_testimonial");

			         	} else {

						
						$data = [

								'nama_user' => $this->input->post('nama_user'),
								'ket_testimonial' => $this->input->post('keterangan'),
								'foto' => $this->upload->data('file_name'), 
							
						];

						
						$this->db->where('id', $id);
						$this->db->update('tbl_testimonial', $data);
						$upload = array('upload_data' => $this->upload->data());
						$this->session->set_flashdata('message', 'swal("Sukses!", "Testiomoni Berhasil Diubah", "success");');
						redirect('testimonials/testimonial');
					}

					}


				}
		
	}

 ?>