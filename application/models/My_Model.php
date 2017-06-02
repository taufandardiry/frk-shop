<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class My_Model extends CI_Model {

	function getData() {
		$query = $this->db->get('barang');
		return $query->result_array();
	}

	function getDataPesanan() {
		$this->db->select('*');
		$query = $this->db->get_where('pesanan', array('status_order'=>'proses'));
		return $query->result_array();
	}

	function addData($data) {
		$this->db->insert('barang', $data);
	}

	function addUser($data) {
		$this->db->insert('user', $data);
	}

	function addCustomer($data) {
		$this->db->insert('customer', $data);
	}

	function login_authen($username, $password)
	{
		//$this->db->select('*');
		$this->db->where('username', $username); //ngecel apakah usernamenya ada di database
		$this->db->where('password', $password); //ngecek apakah passwordnya ada di database
		return $this->db->get('user');
		//$this->db->from('user'); //dicocokkan dengan tabel user
		/*
		$query = $this->db->get();
		
		if ($query->num_rows() == 1) 
		{
			return true;
		}
		else
		{
			return false;
		}
		*/
	}

	function login_authen_cust($username_cust, $password_cust) {
		
		//$this->db->select('*');
		$this->db->where('username_cust', $username_cust); //ngecel apakah usernamenya ada di database
		$this->db->where('password_cust', $password_cust); //ngecek apakah passwordnya ada di database
		return $this->db->get('customer');
		//$this->db->from('customer'); //dicocokkan dengan tabel user
		//$query = $this->db->get();
		/*
		if ($query->num_rows() == 1) 
		{
			return true;
		}
		else
		{
			return false;
		}
		*/
	}

	function authen_user($username)
	{
		$this->db->select('authentication');
		$this->db->where('username', $username);
		$this->db->from('user');
		$query = $this->db->get();
		
		return $query->result_array();
	}
	
	function wrong_password($username, $value) //untuk mengupdate nilai authentication soalnya kan kalo udah 4kali gagal login, akun dia bakalan terblock nah jadi fungsi ini berfungi untuk mengupdate nilai authentication 
	{ 
		$this->db->set('authentication', $value);
		$this->db->where("username", $username);
		$this->db->update('user');
	}

	function delete_item($item)
	{
		$this->db->where_in('kode_barang', $item);
		$this->db->delete('barang');
	}

	public function find($kode_barang){
		//Query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('kode_barang', $kode_barang)
						  ->limit(1)
						  ->get('barang');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}

	function process($nama_depan, $nama_belakang, $alamat, $kota, $kodepos, $telephone) {
		$order_id = mt_rand(1,999);
        $order = array(
            'id' => $order_id,
            'nama_depan_c' => $nama_depan,
            'nama_belakang_c' => $nama_belakang,
            'alamat' => $alamat,
            'kota' => $kota,
            'kode_pos' => $kodepos,
            'telephone' => $telephone,
            'status_order' => 'Proses'
        );
        $this->db->insert('pesanan', $order);
        $this->db->where('id', $order_id);
        foreach($this->cart->contents() as $item) {
            $data = array(
                'orderid' => $order_id,
                'nama_barang_c' => $item['name'],
                'harga_c' => $item['price'],
                'jumlah_c' => $item['qty']
            );
            $this->db->insert('orderdetail', $data);
        }
        return TRUE;
    }
	
 }
?>