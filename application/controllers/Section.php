<?php 

	/**
	 * 
	 */
	class Section extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
		}


		function index(){
			$data['title'] = "Section";
			$data['sub_title'] = "Data Section";

			$this->load->view('template/header', $data);
			$this->load->view('admin/data_section', $data);
			$this->load->view('template/footer');

		}

		function tambah_section(){

			$data['title'] = "Tambah Section";
			$data['sub_title'] = "Tambah Data Section";

			$this->load->view('template/header', $data);
			$this->load->view('admin/add_section', $data);
			$this->load->view('template/footer');

			

		}

		function add_section1(){

			$data['title'] = "Section 1";
			$data['sub_title'] = "Tambah Section 1";

			$this->load->view('template/header', $data);
			$this->load->view('admin/add_section1', $data);
			$this->load->view('template/footer');
		}

		function post_card(){

			$this->load->helper(array('form','url'));
			 $config['upload_path']          = './assets/gambar_section1/';
	          $config['allowed_types']        = 'jpg|png';
	          $config['max_size']             = 200000000;
	          $config['file_name']           = '';

	          $this->load->library('upload', $config);
	          if ($this->input->post('kirim')) {
	          	

				if (!$this->upload->do_upload('img_card1','img_card2','img_card3')) {
					 $error = array('error' => $this->upload->display_errors());
				 $this->session->set_flashdata('message', 'swal("Error!", "Proses input data gagal", "error");');
	         	 redirect("section/add_section1");

	         	} else {

	         	$this->upload->do_upload('img_card1');
	         	$result1 = $this->upload->data();

	         	$this->upload->do_upload('img_card2');
	         	$result2 = $this->upload->data();

	         	$this->upload->do_upload('img_card3');
	         	$result3 = $this->upload->data();

	         	$result = array('img_card1'=>$result1,'img_card2'=>$result2,'img_card3'=>$result3);

	         		$data = [

					'judul' => $this->input->post('judul'),
					'sub_judul' => $this->input->post('sub_judul'),
					'judul_card1' => $this->input->post('judul_card1'),
					'text_card1' => $this->input->post('text1'),
					'img_card1' => $result['img_card1']['file_name'],
					'judul_card2' => $this->input->post('judul_card2'),
					'text_card2' => $this->input->post('text2'),
					'img_card2' => $result['img_card2']['file_name'],
					'judul_card3' => $this->input->post('judul_card3'),
					'text_card3' => $this->input->post('text3'),
					'img_card3' =>$result['img_card3']['file_name'],

					

				];

				$input - $this->db->insert('tbl_section1', $data);
				
				$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil Ditambah", "success");');
				redirect('section/add_section1');
			}
		}
	      }


	      function data_section1(){

	      	$data['title'] = "Data section1";
	      	$data['sub_title'] = "Data Section 1";

	      	$data['section1'] = $this->db->get('tbl_section1')->result_array();

	      	$this->load->view('template/header', $data);
	      	$this->load->view('admin/data_section1', $data);
	      	$this->load->view('template/footer');
	      }

	       function hapus_section1(){

	      	$id = $this->input->get('id');
	      	$delet_images = $this->db->get_where('tbl_section1',array('id' => $id))->row();
	      	$target1 = $delet_images->img_card1;
	      	$target2 = $delet_images->img_card2;
	      	$target3 = $delet_images->img_card3;
			
			unlink("./assets/gambar_section1/$target1");
			unlink("./assets/gambar_section1/$target2");
			unlink("./assets/gambar_section1/$target3");

	      	$delete = $this->db->delete('tbl_section1', array('id' => $id));
	      	$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil Dihapus", "success");');
				redirect('section/data_section1');
	      }

	      function edit_section1(){


	      	$data['title'] = "Section card1";
			$data['sub_title'] = "Edit Section Card 1";

			$id = $this->input->get('id');
			$data['editsection'] = $this->db->get_where('tbl_section1')->result_array();

			$this->load->view('template/header', $data);
			$this->load->view('admin/edit_section1', $data);
			$this->load->view('template/footer');

			

	      }

	      function action_editcard1(){
	      	echo $this->input->get('id');


			$this->load->helper(array('form','url'));
			 $config['upload_path']          = './assets/gambar_section1/';
	          $config['allowed_types']        = 'jpg|png';
	          $config['max_size']             = 200000000;
	          $config['file_name']           = '';

	          $this->load->library('upload', $config);

	          if ($this->input->post('edit')) {

	          	$this->upload->do_upload('img_card1');
	         	$result1 = $this->upload->data();

	         	$this->upload->do_upload('img_card2');
	         	$result2 = $this->upload->data();

	         	$this->upload->do_upload('img_card3');
	         	$result3 = $this->upload->data();

	         	$result = array('img_card1'=>$result1,'img_card2'=>$result2,'img_card3'=>$result3);

	         		$data = [

					'judul' => $this->input->post('judul'),
					'sub_judul' => $this->input->post('sub_judul'),
					'judul_card1' => $this->input->post('judul_card1'),
					'text_card1' => $this->input->post('text1'),
					'img_card1' => $result['img_card1']['file_name'],
					'judul_card2' => $this->input->post('judul_card2'),
					'text_card2' => $this->input->post('text2'),
					'img_card2' => $result['img_card2']['file_name'],
					'judul_card3' => $this->input->post('judul_card3'),
					'text_card3' => $this->input->post('text3'),
					'img_card3' =>$result['img_card3']['file_name'],

					

				];
				$id = $this->input->post('id');

				$this->db->where('id', $id);
				$this->db->update('tbl_section1', $data);
				$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil Diubah", "success");');
				redirect('section/data_section1');


	          }

	      }


	      function section_produk(){

	      	$data['title'] = "Section produk";
	      	$data['sub_title'] = "Data Section Produk";

	      	$data['scProduk'] = $this->db->get('tbl_section_produk')->result_array();

	      	$this->load->view('template/header', $data);
	      	$this->load->view('admin/data_section_produk', $data);
	      	$this->load->view('template/footer');

	      }



	     



	      function add_section_produk(){

	      	$data['title'] = "Section produk";
	      	$data['sub_title'] = "Tambah Section Produk";

	      	$this->load->view('template/header', $data);
	      	$this->load->view('admin/add_section_produk', $data);
	      	$this->load->view('template/footer');


	      	if ($this->input->post('kirim')) {
	      		$data = [
	      			'judul' => $this->input->post('judul'),
	      			'sub_judul' => $this->input->post('sub_judul'),
	      		];
	      		$input = $this->db->insert('tbl_section_produk', $data);

	      		$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil Ditambah", "success");');
				redirect('section/section_produk');
	      	}
	      }

	      function hapus_section_produk(){

	      	$id = $this->input->get('id');

	      	$delete = $this->db->delete('tbl_section_produk',array('id' => $id));

	      	if ($delete == true) {
	      		
	      		$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil Dihapus", "success");');
				redirect('section/section_produk');
	      	}	

	      }

	      function edit_section_produk(){
	      	$id = $this->input->get('id');
	      	$data['title'] = "Section produk";
	      	$data['sub_title'] = "Edit Section Produk";

	      	$data['scProduk'] = $this->db->get_where('tbl_section_produk', array('id' => $id))->result_array();

	      	$this->load->view('template/header', $data);
	      	$this->load->view('admin/edit_section_produk', $data);
	      	$this->load->view('template/footer');


	      	if ($this->input->post('edit')) {
	      			$data = [
	      			'judul' => $this->input->post('judul'),
	      			'sub_judul' => $this->input->post('sub_judul'),
	      		];


	      		$this->db->where('id', $id);
	      		 $this->db->update('tbl_section_produk', $data);

	      		$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil Diubah", "success");');
				redirect('section/section_produk');
	      	}
	      }

	      function testimoni(){

	      	$data['title'] = "Section testimoni";
	      	$data['sub_title'] = "Data Section Testimoni";
	      	$data['scTestimoni'] = $this->db->get('tbl_section_testimoni')->result_array();
	      	$this->load->view('template/header', $data);
	      	$this->load->view('admin/data_section_testimoni', $data);
	      	$this->load->view('template/footer');
	      }

	      function add_section_testimoni(){

	      		$data['title'] = "Section testimoni";
	      	$data['sub_title'] = "Tambah Section Testimoni";

	      	$this->load->view('template/header', $data);
	      	$this->load->view('admin/add_section_testimoni', $data);
	      	$this->load->view('template/footer');


	      	if ($this->input->post('kirim')) {
	      		$data = [
	      			'judul' => $this->input->post('judul'),
	      			'sub_judul' => $this->input->post('sub_judul'),
	      		];
	      		$input = $this->db->insert('tbl_section_testimoni', $data);

	      		$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil Ditambah", "success");');
				redirect('section/testimoni');
	      	}
	      }

	      function edit_section_testimoni(){
	      	$id = $this->input->get('id');
	      	$data['title'] = "Section testimoni";
	      	$data['sub_title'] = "Edit Section Testimoni";

	      	$data['scTestimoni'] = $this->db->get_where('tbl_section_testimoni', array('id' => $id))->result_array();

	      	$this->load->view('template/header', $data);
	      	$this->load->view('admin/edit_section_testimoni', $data);
	      	$this->load->view('template/footer');


	      	if ($this->input->post('edit')) {
	      			$data = [
	      			'judul' => $this->input->post('judul'),
	      			'sub_judul' => $this->input->post('sub_judul'),
	      		];


	      		$this->db->where('id', $id);
	      		 $this->db->update('tbl_section_testimoni', $data);

	      		$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil Diubah", "success");');
				redirect('section/testimoni');
	      	}
	      }


	       function hapus_section_testimoni(){

	      	$id = $this->input->get('id');

	      	$delete = $this->db->delete('tbl_section_testimoni',array('id' => $id));

	      	if ($delete == true) {
	      		
	      		$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil Dihapus", "success");');
				redirect('section/testimoni');
	      	}	

	      }


	      function kontak(){

	      	$data['title'] = "Section kontak";
	      	$data['sub_title'] = "Edit Section Kotak";
	      	$data['scKontak'] = $this->db->get('tbl_section_kontak')->result_array();
	      	$this->load->view('template/header', $data);
	      	$this->load->view('admin/data_section_kontak', $data);
	      	$this->load->view('template/footer');
	      }

	      function add_section_kontak(){

	      	$data['title'] = "Section kontak";
	      	$data['sub_title'] = "Tambah Section Kotak";

	      	$this->load->view('template/header', $data);
	      	$this->load->view('admin/add_section_kontak', $data);
	      	$this->load->view('template/footer');

	      	if ($this->input->post('kirim')) {
	      		$data = [
	      			'judul' => $this->input->post('judul'),
	      			'sub_judul' => $this->input->post('sub_judul'),
	      		];
	      		$input = $this->db->insert('tbl_section_kontak', $data);

	      		$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil Ditambah", "success");');
				redirect('section/kontak');
	      	}

	      }



	       function hapus_section_kontak(){

	      	$id = $this->input->get('id');

	      	$delete = $this->db->delete('tbl_section_kontak',array('id' => $id));

	      	if ($delete == true) {
	      		
	      		$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil Dihapus", "success");');
				redirect('section/kontak');
	      	}	

	      }

	       function edit_section_kontak(){
	      	$id = $this->input->get('id');
	      	$data['title'] = "Section kontak";
	      	$data['sub_title'] = "Edit Section Kontak";

	      	$data['scKontak'] = $this->db->get_where('tbl_section_kontak', array('id' => $id))->result_array();

	      	$this->load->view('template/header', $data);
	      	$this->load->view('admin/edit_section_kontak', $data);
	      	$this->load->view('template/footer');


	      	if ($this->input->post('edit')) {
	      			$data = [
	      			'judul' => $this->input->post('judul'),
	      			'sub_judul' => $this->input->post('sub_judul'),
	      		];


	      		$this->db->where('id', $id);
	      		 $this->db->update('tbl_section_kontak', $data);

	      		$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil Diubah", "success");');
				redirect('section/kontak');
	      	}
	      }

	      function section2(){

	      	$data['title'] = "Tambah Section 2";
			$data['sub_title'] = "Tambah Data Section 2";

			$this->load->view('template/header', $data);
			$this->load->view('admin/add_section2', $data);
			$this->load->view('template/footer');


	      }

	      function post_card2(){

			$this->load->helper(array('form','url'));
			 $config['upload_path']          = './assets/gambar_section2/';
	          $config['allowed_types']        = 'jpg|png';
	          $config['max_size']             = 200000000;
	          $config['file_name']           = '';

	          $this->load->library('upload', $config);
	          if ($this->input->post('kirim')) {
	          	

				if (!$this->upload->do_upload('img_card1','img_card2','img_card3')) {
					 $error = array('error' => $this->upload->display_errors());
				 $this->session->set_flashdata('message', 'swal("Error!", "Proses input data gagal", "error");');
	         	 redirect("section/add_section2");

	         	} else {

	         	$this->upload->do_upload('img_card1');
	         	$result1 = $this->upload->data();

	         	$this->upload->do_upload('img_card2');
	         	$result2 = $this->upload->data();

	         	$this->upload->do_upload('img_card3');
	         	$result3 = $this->upload->data();

	         	$result = array('img_card1'=>$result1,'img_card2'=>$result2,'img_card3'=>$result3);

	         		$data = [

					'judul' => $this->input->post('judul'),
					'sub_judul' => $this->input->post('sub_judul'),
					'judul_card1' => $this->input->post('judul_card1'),
					'text_card1' => $this->input->post('text1'),
					'img_card1' => $result['img_card1']['file_name'],
					'judul_card2' => $this->input->post('judul_card2'),
					'text_card2' => $this->input->post('text2'),
					'img_card2' => $result['img_card2']['file_name'],
					'judul_card3' => $this->input->post('judul_card3'),
					'text_card3' => $this->input->post('text3'),
					'img_card3' =>$result['img_card3']['file_name'],

					

				];

				$input - $this->db->insert('tbl_section2', $data);
				
				$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil Ditambah", "success");');
				redirect('section/data_section2');
			}
		}
	      }



	      function data_section2(){

	      	$data['title'] = "Data section2";
	      	$data['sub_title'] = "Data Section 2";

	      	$data['section2'] = $this->db->get('tbl_section2')->result_array();

	      	$this->load->view('template/header', $data);
	      	$this->load->view('admin/data_section2', $data);
	      	$this->load->view('template/footer');
	      }


	      function hapus_section2(){

	      	$id = $this->input->get('id');
	      	$delet_images = $this->db->get_where('tbl_section2',array('id' => $id))->row();
	      	$target1 = $delet_images->img_card1;
	      	$target2 = $delet_images->img_card2;
	      	$target3 = $delet_images->img_card3;
			
			unlink("./assets/gambar_section2/$target1");
			unlink("./assets/gambar_section2/$target2");
			unlink("./assets/gambar_section2/$target3");

	      	$delete = $this->db->delete('tbl_section2', array('id' => $id));
	      	$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil Dihapus", "success");');
				redirect('section/data_section2');
	      }

	      function edit_section2(){

	      	$data['title'] = "Section card2";
			$data['sub_title'] = "Edit Section Card 2";

			$id = $this->input->get('id');
			$data['editsection2'] = $this->db->get_where('tbl_section2')->result_array();

			$this->load->view('template/header', $data);
			$this->load->view('admin/edit_section2', $data);
			$this->load->view('template/footer');

			

	      }

	      function action_editcard2(){
	      	echo $this->input->get('id');


			$this->load->helper(array('form','url'));
			 $config['upload_path']          = './assets/gambar_section2/';
	          $config['allowed_types']        = 'jpg|png';
	          $config['max_size']             = 200000000;
	          $config['file_name']           = '';

	          $this->load->library('upload', $config);

	          if ($this->input->post('edit')) {

	          	$this->upload->do_upload('img_card1');
	         	$result1 = $this->upload->data();

	         	$this->upload->do_upload('img_card2');
	         	$result2 = $this->upload->data();

	         	$this->upload->do_upload('img_card3');
	         	$result3 = $this->upload->data();

	         	$result = array('img_card1'=>$result1,'img_card2'=>$result2,'img_card3'=>$result3);

	         		$data = [

					'judul' => $this->input->post('judul'),
					'sub_judul' => $this->input->post('sub_judul'),
					'judul_card1' => $this->input->post('judul_card1'),
					'text_card1' => $this->input->post('text1'),
					'img_card1' => $result['img_card1']['file_name'],
					'judul_card2' => $this->input->post('judul_card2'),
					'text_card2' => $this->input->post('text2'),
					'img_card2' => $result['img_card2']['file_name'],
					'judul_card3' => $this->input->post('judul_card3'),
					'text_card3' => $this->input->post('text3'),
					'img_card3' =>$result['img_card3']['file_name'],

					

				];
				$id = $this->input->post('id');

				$this->db->where('id', $id);
				$this->db->update('tbl_section2', $data);
				$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil Diubah", "success");');
				redirect('section/data_section2');


	          }

	      }



	        
	}

 ?>