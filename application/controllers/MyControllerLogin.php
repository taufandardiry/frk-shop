<?php 
	
	class MyControllerLogin extends CI_Controller {
		public function __construct() {   
			parent::__construct();   
			$this->load->model('My_Model');
			if(!$this->session->userdata('username')) {
			}  
			else {
				//$this->session->set_flashdata('pesan', 'user/pass ilegal!');
				redirect(base_url('MyControllerData'));
			}
		} 
		/*
		public function __construct() {
			parent::__construct();
			$this->load->model('My_Model');
		} */


	function index() {
		$this->load->view('back-end/login');  
	}  

	function login() {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			//$password = $this->encript();
			$isLogin = $this->My_Model->login_authen($username, $password);

			if($isLogin->num_rows() == 1) {
				foreach ($isLogin->result() as $user) {
					$sess_user['username'] = $user->username;
					$sess_user['password'] = $user->password;
					$this->session->set_userdata($sess_user);
					# code...
				}
				redirect(base_url('index.php/MyControllerData/index'));
			} 
			else {
				$this->index();
			} 

			/*
			$i = $this->My_Model->authen_user($username);
			if ($isLogin == true && $i[0]['authentication'] < 3) 
			{
				$this->home();
			}
			else
			{
				if ($i[0]['authentication'] < 3) {
					$update = $this->My_Model->wrong_password($username, $i[0]['authentication']+1);
					$data['err_message'] = "GAGAL LOGIN " . ($i[0]['authentication']+1);
					$this->load->view('back-end/login', $data);
				}
				else {
					$data['err_message'] = "AKUN ANDA TERBLOCK";
					$this->load->view('back-end/login', $data);
				}
			}  */
		}



	function encrypt() {

		$str = $this->input->post('password');
		$input = base64_encode($str);

		$key = array(
		 
		 'a' => 'G1',
		 'b' => 'H!',
		 'c' => 'I#',
		 'd' => 'J5',
		 'f' => 'KP',
		 'e' => 'LK',
		 'g' => 'M@',
		 'h' => 'N5',
		 'i' => 'O;',
		 'j' => 'P5',
		 'k' => 'QD',
		 'l' => 'R0',
		 'm' => 'S@',
		 'n' => 'T^',
		 'o' => 'U"',
		 'p' => 'VP',
		 'q' => 'W3',
		 'r' => 'XF',
		 's' => 'Y9',
		 't' => 'Z7',
		 'u' => 'A@',
		 'v' => 'BB',
		 'w' => 'C=',
		 'x' => 'D&',
		 'y' => 'E?',
		 'z' => 'F[',

		);

		 $input = strtolower($input);
		 $output = str_replace(array_keys($key), $key, $input);
		 //$dek = str_replace( $key, array_keys($key), $output);
		 return $output;

		}


	}

?>