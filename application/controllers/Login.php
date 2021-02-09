<?php 

 /**
  * c
  */
 class Login extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent:: __construct();

 		$this->load->library('form_validation');
 	}

 		function index(){

 			$data['title'] = "Login";
 			$data['sub_title'] = "Login";

 			$this->load->view('admin/login.php', $data);
 		}


 		function auth(){

 			$this->form_validation->set_rules('username','username','trim|required');

 			$username = $this->input->post('username');
 			$pass = $this->input->post('password');

 			$query = $this->db->get_where('tbl_operator', array('username' => $username))->row_array();

 			if ($query == true) {
 				if (password_verify($pass, $query['pass'])) {
 					
 					$data = [
 						'username' => $username,
 					];

 					$this->session->set_userdata($data);
 					$this->session->set_flashdata('message', "Swal.fire({
					  title: 'Yess!',
					  text: 'Anda berhasil login',
					  imageUrl: 'http://localhost:8080/lending_admin/assets3/img/suksess.svg',
					  imageWidth: 200,
					  imageHeight: 100,
					  imageAlt: 'Custom image',
					})");
 					redirect('Dashbord/index');
 				} else{

 					$this->session->set_flashdata('message', "Swal.fire({
					  title: 'Gagal!',
					  text: 'Password anda salah',
					  imageUrl: 'http://localhost:8080/lending_admin/assets3/img/pass.svg',
					  imageWidth: 200,
					  imageHeight: 100,
					  imageAlt: 'Custom image',
					})");

 						
 						redirect('Login/');
 				}

 			} else{

 				 $this->session->set_flashdata('message', "Swal.fire({
					  title: 'Gagal!',
					  text: 'Akun yang anda masukan salah',
					  imageUrl: 'http://localhost:8080/lending_admin/assets3/img/error1.svg',
					  imageWidth: 200,
					  imageHeight: 100,
					  imageAlt: 'Custom image',
					})");

 				redirect('Login/');
 			}

 		}	
 }



 ?>

