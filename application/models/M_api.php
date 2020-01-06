<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_api extends CI_Model {

	public function byKategori($value='')
	{
		$this->db->where('id_kategori', $value);
		return $this->db->get('cerita')->result();
	}

	function autoId(){
		return md5(uniqid(rand(), 
			true));
	}

	function sendNotif($title, $body){
		$url = "https://fcm.googleapis.com/fcm/send";
	    $token = "/topics/news";
	    $serverKey = 'AAAAdKCLzws:APA91bGgztT3sTgMdwfZKE47XaHqzyxTNBUE61Wmg5EvQmIwqk9TTs5eamSnkXZu43D2BOKe6EeGkgnDRefQJHlpTq8fa_o7x8GlRkQLX_U9KWm5W8QH-U0Hq6khpGUPw9lixZb4BEXc';
	    // $title = "Notification title";
	    // $body = "Hello I am from Your php server";
	    $notification = array('title' =>$title , 'body' => $body);
	    $arrayToSend = array('to' => $token, 'notification' => $notification);
	    $json = json_encode($arrayToSend);
	    $headers = array();
	    $headers[] = 'Content-Type: application/json';
	    $headers[] = 'Authorization: key='. $serverKey;
	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
	    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
	    //Send the request
	    $response = curl_exec($ch);
	    //Close request
	    if ($response === FALSE) {
	    die('FCM Send Error: ' . curl_error($ch));
	    }
	    // echo $response;
	    curl_close($ch);
	}

	function getUser($key=""){
		$this->db->where('auth_key', $key);
		return $this->db->get('user');
	}

	function password($pass = ""){
		$options = [
		    'cost' => 12,
		];
		return password_hash($pass, PASSWORD_BCRYPT, $options);
	}
	function cek_field($field="", $value="", $db=""){
		$this->db->select('count(*)');
		$this->db->where($field, $value);
		$cek = $this->db->get($db);
		$hasil = $cek->row_array();
		return $hasil['count(*)'];
	}

	function cek_pass($field="", $value="", $pass=""){
		$this->db->select('password');		
		$this->db->where($field, $value);
		$dbku = $this->db->get('user');
		$db_pass = $dbku->result_array();
		$isi = $db_pass[0]['password'];
		// return $isi;

		return password_verify($pass, $isi);
	}

	public function getAllUser($field, $value)
	{
		$this->db->select('id_user, nama_user, foto_user, username, email, auth_key');
		$this->db->where($field, $value);
		$user = $this->db->get('user');
		return $user->result();
	}

	function login($field, $value, $pass){
		$key = $this->cek_field($field, $value, 'user');
		if ($key == "1") {
			return $this->cek_pass($field, $value, $pass);
		}else{
			return false;
		}
		return false;
	}

	function register($email="", $username="", $password=""){
		$key = $this->autoId();
		if (!empty($email) && !empty($username) && !empty($password)) {
			$pass = $this->password($password);
			$arr = array('email' => $email,
							'username' => $username,
							'password' => $pass,
							'auth_key' => $key );
 			$insert = $this->db->insert('user', $arr);
 			if ($insert) {
 				return true;
 			}else{
 				return false;
 			}


		}else{
			return false;
		}
 		

 	}

 	public function getCerita($field, $value)
 	{
 		$this->db->select('cerita.id_cerita, user.username,kategori.nama_kategori, cerita.judul, cerita.img, cerita.diskripsi, cerita.isi');
 		// $this->db->select('*');
		$this->db->from('cerita');
		$this->db->join('kategori', 'cerita.id_kategori = kategori.id_kategori');
		$this->db->join('user', 'cerita.id_user = user.id_user');
		$this->db->where($field, $value);
		$this->db->order_by('DATE(cerita.date)', 'desc');
		// $this->db->where('cerita.id_user', 'user.id_user');
		// $this->db->where('cerita.id_kategori', 'kategori.id_kategori');

		$query = $this->db->get();
		return $query->result();
 	}

 	public function upload_file($name_form='')
 	{
 		$config['upload_path'] = './uploads/';    
 		$config['allowed_types'] = 'jpg|png|jpeg';    
 		      
 		$this->load->library('upload', $config); 
 		// Load konfigurasi uploadnya    
 		if($this->upload->do_upload($name_form)){ 
 		// Lakukan upload dan Cek jika proses upload berhasil      
 		// Jika berhasil :      
 		$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
 		return $return;    
 		}else{      
 		// Jika gagal :      
 			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
 			return $return;    
 		}
 	}

 	public function postCerita($value = array())
 	{

	$ret = $this->db->insert('cerita', $value);
	return $ret; 		
 		# code...
 	}

 	public function postMasukan($value = array())
 	{

	$ret = $this->db->insert('masukan', $value);
	return $ret; 		
 		# code...
 	}

 	public function getKat($userID='')
 	{
 		$this->db->select('kategori.nama_kategori, kategori.id_kategori');
 		$this->db->from('ukm');
 		$this->db->join('kategori', 'ukm.id_kategori = kategori.id_kategori', 'left');
 		$this->db->join('user', 'ukm.id_user = user.id_user', 'left');
 		$this->db->where('ukm.id_user', $userID);
 		$ret = $this->db->get();
 		return $ret->result();
 	}

}

/* End of file M_api.php */
/* Location: ./application/models/M_api.php */



 ?>