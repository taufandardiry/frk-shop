<?php 
	class MyController extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('My_Model');
			if(!$this->session->userdata('nama_depan')) {

			}  
			else {
				redirect(base_url('MyControllerUser'));

			}
		}

		function index() {
			$data['err_message'] = "";
			$data = $this->My_Model->getData();
			$this->load->view('front-end/index', array('data' => $data));
			//$this->load->view('front-end/index', $data);
		}

		function errorpage() {
			$this->load->view('front-end/404');
		} 
   
		function basketpage() {
			$this->load->view('front-end/basket');
		}

		function blogpage() {
			$this->load->view('front-end/blog');
		}

		function categoryfullpage() {
			$this->load->view('front-end/category-full');
		}

		function categoryrightpage() {
			$this->load->view('front-end/category-right');
		}

		function categorypage() {
			$data = $this->My_Model->getData();
			$this->load->view('front-end/category', array('data' => $data));
		}

		function checkout1page() {
			$this->load->view('front-end/checkout1');
		}

		function checkout2page() {
			$this->load->view('front-end/checkout2');
		}

		function checkout3page() {
			$this->load->view('front-end/checkout3');
		}

		function checkout4page() {
			$this->load->view('front-end/checkout4');
		}
		
		function contactpage() {
			$this->load->view('front-end/contact');
		}

		function customeraccountpage() {
			$this->load->view('front-end/customer-account');
		}

		function customerorderpage() {
			$this->load->view('front-end/customer-order');
		}

		function customerorderspage() {
			$this->load->view('front-end/customer-orders');
		}

		function customerwishlistpage() {
			$this->load->view('front-end/customer-wishlist');
		}

		function detailpage() {
			$this->load->view('front-end/detail');
		}

		function faqpage() {
			$this->load->view('front-end/faq');
		}

		function postpage() {
			$this->load->view('front-end/post');
		}

		function registerpage() {
			$this->load->view('front-end/register');
		}

		function textrightpage() {
			$this->load->view('front-end/text-right');
		}

		function textpage() {
			$this->load->view('front-end/text');
		}

		function register() {
			$data = array(
				'username_cust' => $this->input->post('username_cust'),
				'password_cust' => $this->input->post('password_cust'),
				'email_cust' => $this->input->post('email_cust'),
				'nama_depan' => $this->input->post('nama_depan'),
				'nama_belakang' => $this->input->post('nama_belakang'),
				'jenis_kelamin' => $this->input->post('gender'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir')
			);
			$this->My_Model->addCustomer($data);
			$this->loginCustomer();
		}

		function loginCustomer()
		{
			$username_cust = $this->input->post('username_cust');
			$password_cust = $this->input->post('password_cust');
			$cek = $this->My_Model->login_authen_cust($username_cust, $password_cust);
			if ($cek->num_rows()==1) {
				foreach ($cek->result() as $user) {
					$sess_user['username_cust'] = $user->username;
					$sess_user['password_cust'] = $user->password;
					$sess_user['email_cust'] = $user->email;
					$sess_user['nama_depan'] = $user->nama_depan;
					$sess_user['nama_belakang'] = $user->nama_belakang;
					$this->session->set_userdata($sess_user);
				}
			redirect(base_url('index.php/MyControllerUser/index'));
			} else {
				$this->registerpage();
			}

		}
		
	}
?>