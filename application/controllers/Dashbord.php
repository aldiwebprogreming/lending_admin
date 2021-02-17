 <?php 

	/**
	 * 
	 */
	class Dashbord extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			if ($this->session->userdata('username') == NULL) {
			redirect('login/');
			}
			$this->load->library('form_validation');
		}

		function index(){
				
			$data['title'] ="Dashboard";
			$data['sub_title'] = "Dashboard";

			$data['product'] = $this->db->get('tbl_galeri_product')->num_rows();
			$data['message'] = $this->db->get('tbl_pesan')->num_rows();
			$this->load->view('template/header', $data);
			$this->load->view('admin/dashboard',$data);
			$this->load->View('template/footer', $data);

		}

		function data_pengunjung(){
			$date = date('Y-m-d');
			$data['pengunjung'] =  $this->db->query("SELECT * FROM tbl_visitor WHERE date ='".$date."' GROUP BY ip")->num_rows();

			$this->load->view('admin/pengunjunghariini', $data); 
		}


		function jumlah_pengunjung(){

			$dbpengunjung =  $this->db->query("SELECT COUNT(hits) as hits FROM tbl_visitor")->row();  
             $data['totalpengunjung'] = isset($dbpengunjung->hits)?($dbpengunjung->hits):0; 
			$this->load->view('admin/jumlah_pengunjung', $data);
		}

		function online(){

			$bataswaktu = time() -300;
            $data['pengunjungonline']  = $this->db->query("SELECT * FROM tbl_visitor WHERE online > '".$bataswaktu."'")->num_rows(); // hitung pengunjung online

			$this->load->view('admin/online', $data);
		}

		function notf_promo(){


		$data['promo'] = $this->db->get('tbl_promo')->result_array();
		foreach ($data['promo'] as $date_hasil) {
		$tgl1 =  $date_hasil['end_promo'];
		$tgl = date('Y-m-d');

		$this->db->where('start_promo AND end_promo BETWEEN "'. date('Y-m-d', strtotime($tgl)). '" and "'. date('Y-m-d', strtotime($tgl1)).'"');	

		$data = $this->db->get('tbl_promo',1)->result_array();
		}

		if ($data == TRUE) {
			echo "Active" ;
		}else{
			echo "Disable";
		}

		}


		
	}


 ?>