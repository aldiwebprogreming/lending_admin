<?php 

	/**
	 * 
	 */
	class Video extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if ($this->session->userdata('username') == NULL) {
			redirect('login/');
			}
		}

		function video(){

			$data['title'] = "Video Review";
			$data['sub_title'] = "Video Review";

			$data['video'] = $this->db->get('tbl_video_review')->result_array();
			$data['num'] = $this->db->get('tbl_video_review')->num_rows();

			$this->load->view('template/header', $data);
			$this->load->view('admin/video', $data);
			$this->load->view('template/footer');


		}

		function add_video(){

			$data['title'] = "Tambah Video Review";
			$data['sub_title'] = "Tambah Video Review";

			$this->load->view('template/header', $data);
			$this->load->view('admin/add_video', $data);
			$this->load->view('template/footer');

			if ($this->input->post('kirim')) {
				$data = [

					'nama_video_review' => $this->input->post('nama_video_review'),
					'frame' => $this->input->post('frame'),

				];

				$this->db->insert('tbl_video_review', $data);
				$this->session->set_flashdata('message', 'swal("Sukses!", "Video Berhasil Ditambah", "success");');
				redirect('video/video');

			}
		}

		function edit(){


			$data['title'] = "Edit Video Review";
			$data['sub_title'] = "Edit Video Review";
			$id = $this->input->get('id');

			$data['video'] = $this->db->get_where('tbl_video_review', array('id' => $id))->result_array();

			$this->load->view('template/header', $data);
			$this->load->view('admin/edit_video', $data);
			$this->load->view('template/footer');

			if ($this->input->post('edit')) {
				$data = [

					'nama_video_review' => $this->input->post('nama_video_review'),
					'frame' => $this->input->post('frame'),

				];

				$this->db->where('id', $id);
				$this->db->update('tbl_video_review', $data);
				$this->session->set_flashdata('message', 'swal("Sukses!", "Video Review Berhasil Diubah", "success");');
				redirect('video/video');

			

			}
		}

		function hapus(){

			$id = $this->input->get('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_video_review');
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil dihapus", "success");');
				redirect('video/video');
		}
	}

 ?>