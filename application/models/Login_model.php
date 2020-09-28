<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	function __construct(){
		parent::__construct();
		
		$this->load->database(); // Berfungsi untuk memanggil database
	}

	// Berfungsi untuk mengambil data pada tabel user yang ada di database kita
	function ambil_data($data){		
		//Membuat table users jika table belum tersedia
		$this->UsersTableExists();
		
		$user = $this->db->get_where('users',$data);
		if ($user->num_rows() == 0) {
			return FALSE;
		} else {
			return $user->result();
		}		
	}
	function users_id()
	{
	return $this->session->userdata('id');
	}

	function username()
	{
	return $this->session->userdata('username');
	}

	function password()
	{
	return $this->session->userdata('password');
	}
	// Memeriksa apakah tabel users sudah ada
	function UsersTableExists() {
		if (!$this->db->simple_query('select * from users'))
			{
					$sql= "CREATE TABLE IF NOT EXISTS `users` (
					  `ID` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
					  `username` varchar(100) CHARACTER SET latin1 NOT NULL,
					  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
					  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
					  `level` varchar(50) CHARACTER SET latin1 NOT NULL
					) ENGINE=MyISAM;";
					if ($this->db->query($sql))
					{
						$this->db->query("
						INSERT INTO `users` 
						(`username`, `password`, `email`, `level`) 
						VALUES
						('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'administrator');");
					}
			}
	}
	/* end fungsi restrict */
}