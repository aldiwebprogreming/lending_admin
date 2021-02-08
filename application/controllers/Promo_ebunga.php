<?php 

	/**
	 * 
	 */
	class Promo_ebunga extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		function index(){

			$data['promo'] = $this->db->get('tbl_promo')->result_array();
			$data['product'] = $this->db->get('tbl_galeri_product')->result_array();
			$data['video'] = $this->db->get('tbl_video_review')->result_array();
			$data['testimoni'] = $this->db->get('tbl_testimonial')->result_array();

			$this->load->view('admin/pro', $data);
		}

		function add_pesan(){



			if ($this->input->post('kirim')) {
				
				$data = [

					'nama' => $this->input->post('name'),
					'phone' => $this->input->post('phone'),
					'email' => $this->input->post('email'),
					'pesan' => $this->input->post('message')
				];

				$input = $this->db->insert('tbl_pesan', $data);
				$this->session->set_flashdata('message', 'swal("Sukses!", "Message Berhasil Dikirim", "success");');
				redirect('Promo_ebunga/');
			}
		}



	}

 ?>