<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

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
		// redirect('pagenotfound');
		$query = $this->db->get('krpl');
		// echo json_encode($query->result());

		$data=array('data'=>json_encode($query->result()));
		$this->load->view('api',$data);
	}
	public function get_gis_all()
	{
		$query = $this->db->get('krpl');
		echo json_encode($query->result());
	}
	public function get_gis_byid($id)
	{
		$this->db->select('*');
		$this->db->from('krpl');
		$this->db->where('id', $id);
		$query = $this->db->get();
		echo json_encode($query->result());
	}
	public function set_gis($id)
	{
		$this->db->select('*');
		$this->db->from('krpl');
		$this->db->where('id', $id);
		$query = $this->db->get();
		echo json_encode($query->result());
	}
}
