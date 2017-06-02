<?php 
	class MyControllerUser extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('My_Model');
			if($this->session->userdata('nama_depan') != null || $this->session->userdata('nama_depan') != "") {

			}  
			else {
				redirect(base_url('MyController/index'));
			}
			$this->load->library('cart');

		}

		function index() {
			$data['err_message'] = "";
			$data = $this->My_Model->getData();
			$this->load->view('user/index', array('data' => $data));
			//$this->load->view('user/index', $data);
		}

		function logout() {
			$this->session->sess_destroy();
			redirect(base_url('index.php/MyController/index'));
		}

		function errorpage() {
			$this->load->view('user/404');
		} 
   
		function basketpage() {

			$this->load->view('user/basket');
		}

		public function add_to_cart($kode_barang)
		{
			$product = $this->My_Model->find($kode_barang);
			$data = array(
						   'id'      => $product->kode_barang,
						   'qty'     => 1,
						   'price'   => $product->harga,
						   'name'    => $product->nama_barang
						);
	 
			$this->cart->insert($data);
			redirect('MyControllerUser/basketpage');
		}

		function clear_cart() {
			$this->cart->destroy();
			redirect('MyControllerUser/basketpage');
		}

		function inputOrder() {
			$nama_depan = $this->session->userdata('nama_depan');
			$nama_belakang = $this->session->userdata('nama_belakang');
			$alamat = $this->input->post('alamat');
			$kota = $this->input->post('kota');
			$kodepos = $this->input->post('kode_pos');
			$telephone = $this->input->post('telephone');
			$isProcessed = $this->My_Model->process($nama_depan, $nama_belakang, $alamat, $kota, $kodepos, $telephone);
			if($isProcessed) {
				$this->cart->destroy();
				redirect('MyControllerUser/checkout4page');
			} else {
				$this->session->set_flashdata('Error', 'Maaf order anda gagal diproses:(');
			}

		}

		function blogpage() {
			$this->load->view('user/blog');
		}

		function categoryfullpage() {
			$this->load->view('user/category-full');
		}

		function categoryrightpage() {
			$this->load->view('user/category-right');
		}

		function categorypage() {
			$data = $this->My_Model->getData();
			$this->load->view('user/category', array('data' => $data));
		}

		function checkout1page() {
			$this->load->view('user/checkout1');
		}

		function checkout2page() {
			$this->load->view('user/checkout2');
		}

		function checkout3page() {
			$this->load->view('user/checkout3');
		}

		function checkout4page() {
			$this->load->view('user/checkout4');
		}
		
		function contactpage() {
			$this->load->view('user/contact');
		}

		function customeraccountpage() {
			$this->load->view('user/customer-account');
		}

		function customerorderpage() {
			$this->load->view('user/customer-order');
		}

		function customerorderspage() {
			$this->load->view('user/customer-orders');
		}

		function customerwishlistpage() {
			$this->load->view('user/customer-wishlist');
		}

		function detailpage() {
			$this->load->view('user/detail');
		}

		function faqpage() {
			$this->load->view('user/faq');
		}

		function postpage() {
			$this->load->view('user/post');
		}

		function registerpage() {
			$this->load->view('user/register');
		}

		function textrightpage() {
			$this->load->view('user/text-right');
		}

		function textpage() {
			$this->load->view('user/text');
		}


	}
 ?>