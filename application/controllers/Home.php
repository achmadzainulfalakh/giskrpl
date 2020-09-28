<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Kelas ini akan di tampilkan pertama kali 
	 * saat user mengunjungi situs, karena telah 
	 * dikonfigurasi secara default dalam file route.php
	 */
	public function __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{
		redirect('home/peta_lokasi');
	}
	public function data_lokasi()
	{
		$data=array(
			'title'=>'KRPL - Data Lokasi',
			'dataajax'=>json_decode($this->krpl_model->get_gis_all()),
		);
		$this->load->view('head',$data);
		$this->load->view('header');
		$this->load->view('datalokasi');
		$this->load->view('footer');
		$this->load->view('foot');
	}
	public function detail_lokasi($id)
	{
		$data=array(
			'title'=>'Detail Lokasi',
			'dataajax'=>json_decode(file_get_contents(base_url().'index.php/api/get_gis_byid/'.$id)),
		);
		$this->load->view('head',$data);
		$this->load->view('header');
		$this->load->view('detaillokasi');
		$this->load->view('footer');
		$this->load->view('foot');
	}
	public function peta_lokasi()
	{
		$data=array(
			'title'=>'KRPL - Peta Lokasi',
			'dataajax'=>json_decode($this->krpl_model->get_gis_all()),
		);
		$this->load->view('head',$data);
		$this->load->view('header');
		$this->load->view('petalokasi');
		$this->load->view('footer');
		$this->load->view('foot');
	}

}
