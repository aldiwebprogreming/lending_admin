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
		foreach ($data['promo'] as $date_hasil) {
		$tgl1 =  $date_hasil['end_promo'];
		$tgl = date('Y-m-d');

	$this->db->where('start_promo AND end_promo BETWEEN "'. date('Y-m-d', strtotime($tgl)). '" and "'. date('Y-m-d', strtotime($tgl1)).'"');	

	$data['num_promo'] = $this->db->get('tbl_promo',1)->result_array();
	}
	
			// $data['promo'] = $this->db->get('tbl_promo')->result_array();

			$data['product'] = $this->db->get('tbl_galeri_product')->result_array();
			$data['video'] = $this->db->get('tbl_video_review')->result_array();
			$data['testimoni'] = $this->db->get('tbl_testimonial')->result_array();
			$papan = "Papan bunga";
			$cake = "Cake";
			$parcel = "Parcel";
			$data['papan_bunga'] = $this->db->get_where('tbl_galeri_product', array('kategori_produk' => $papan ))->result_array();
			$data['cake'] = $this->db->get_where('tbl_galeri_product', array('kategori_produk' => $cake ))->result_array();
			$data['parcel'] = $this->db->get_where('tbl_galeri_product', array('kategori_produk' => $parcel ))->result_array();

			$data['default'] = $this->db->get('tbl_default')->result_array();

			

			$this->load->view('admin/pro', $data);
		}

		function add_pesan(){



			if ($this->input->post('kirim')) {

				$date = date('Y-m-d');
				
				$data = [

					'nama' => $this->input->post('name'),
					'phone' => $this->input->post('phone'),
					'email' => $this->input->post('email'),
					'pesan' => $this->input->post('message'),
					'date' => $date,
					'status' => 0
				];

				$nama  = $this->input->post('nama');
				$email = $this->input->post('email');


				$this->_kirimEmail($email, $nama);
				$input = $this->db->insert('tbl_pesan', $data);
				$this->session->set_flashdata('message', "Swal.fire({
					  title: 'Yess!',
					  text: 'Message anda berhasil dikirim',
					  imageUrl: 'http://localhost:8080/lending_admin/assets2/images/pesan.svg',
					  imageWidth: 200,
					  imageHeight: 100,
					  imageAlt: 'Custom image',
					})");
				redirect('Promo_ebunga/');
			}
		}


		private function _kirimEmail($email,$nama){


			$config = [
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'alldii1956@gmail.com',
			'smtp_pass' => 'aldimantap123',
			'smtp_port' => 465,
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'newline'   => "\r\n",
		];



		$this->load->library('email', $config);
		$this->email->initialize($config);

	      $this->email->from('alldii1956@gmail.com', 'ebunga');
	      $this->email->to($email);
	      $this->email->subject('Info ebunga');

	      $get = file_get_contents(base_url('email/email.php?id=3'));
	      $get1 = file_get_contents(base_url('email/email1.php'));
	      $get2 = file_get_contents(base_url('email/email2.php'));	
	  		$this->email->message("$get1<h1 style='text-align:center; color: orange'>Herry Tonesa</h1>$get2");
	 	

        if ($this->email->send()) {
        	
		        	echo "berhasil";
		        } else {


		        	  echo 'Email tidak berhasil dikirim';
		               echo '<br />';
		               echo $this->email->print_debugger();
		        }


		}


		


	}

 ?>


