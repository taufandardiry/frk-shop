<?php 
	class MyControllerData extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('My_Model');
			if($this->session->userdata('username') != null || $this->session->userdata('username') != "") {

			}  
			else {
				redirect(base_url('MyControllerLogin'));
			}
		}

		function index()	{
			$this->load->view('back-end/index');  
		}

		function logout() {
			$this->session->sess_destroy();
			redirect(base_url('index.php/MyControllerLogin/index'));
		}

		function inputadmin() {
			$this->load->view('back-end/input');
		}

		function pemesananadmin() {
			$data = $this->My_Model->getDataPesanan();
			$this->load->view('back-end/pemesanan', array('data' => $data));
		}

		function barangadmin() {
			$data = $this->My_Model->getData();
			$this->load->view('back-end/tables', array('data' => $data));
		}

		function create() {
			$img = $this->upload->data();
			$image = $img['file_name'];
			$data = array(
				'kode_barang' => $this->input->post('kode_barang'),
				'nama_barang' => $this->input->post('nama_barang'),
				'jenis' => $this->input->post('jenis'),
				'satuan' => $this->input->post('satuan'),
				'jumlah' => $this->input->post('jumlah'),
				'harga' => $this->input->post('harga'),
				'image' => $image
			);
			$this->My_Model->addData($data);
			$this->inputadmin();
			//$this->home();
		}

		function readData() 
		{
			$data = $this->My_Model->getData();
			$this->load->view('view', array('data'=> $data));
		}


		function delete_barang()
		{
			$delete = $this->input->post('barang');
			$this->My_Model->delete_item($delete);
			$this->barangadmin();
		}


        public function do_upload()
        {
            $config['upload_path']          = './upload/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('image')) {
            	echo $this->upload->display_errors();
                echo "gagal gan, sabar:(";
            }
            else {
           		$this->create();
            }
        }

    }

 ?>