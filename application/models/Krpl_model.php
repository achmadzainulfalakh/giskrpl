<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Krpl_model extends CI_Model {

	/**
	 * Kelas ini akan di tampilkan pertama kali 
	 * saat user mengunjungi situs, karena telah 
	 * dikonfigurasi secara default dalam file route.php
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function index()
	{
		redirect('pagenotfound');
	}
	public function get_gis_all()
	{
		$query = $this->db->get('krpl');
		return json_encode($query->result());
	}
	public function get_gis_byid($id)
	{
		$this->db->select('*');
		$this->db->from('krpl');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return json_encode($query->result());
	}
	
	function insert_krpl($data){		
		$result = $this->db->insert('krpl', $data);
		if (!$result) {
			return FALSE;
		} else {
			return true;	
		}		
	}
	function update_krpl($id,$data){		
		$this->db->set($data);
		$this->db->where('id', $id);
		$result=$this->db->update('krpl');
		if (!$result) {
			return FALSE;
		} else {
			return true;	
		}		
	}
	function delete_krpl($id){		
		$tables = array('krpl');
		$this->db->where('id', $id);
		$this->db->delete($tables);
		
		return true;	
				
	}
}
