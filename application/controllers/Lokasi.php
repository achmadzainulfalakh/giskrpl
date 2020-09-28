<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	//halaman home atau halaman depan
	
	public $u;
	public $p;
	public $e;
	
	public function __construct()
	{
		parent::__construct();
		
		if(!$this->login_model->username()){
			redirect(base_url().'home');
		}
	}
	public function index()
	{
		$data=array(
		'title'=>'KRPL - Data Lokasi',
		'dataajax'=>json_decode($this->krpl_model->get_gis_all()),
		);
		$this->load->view('head',$data);
		$this->load->view('header');
		$this->load->view('table_lokasi');
		$this->load->view('footer');
		$this->load->view('foot');
	}
	public function update_lokasi($id)
	{
		if($this->input->post('submit') == 'update'){
			//lakukan metode update lokasi
			$update=array(
				'nama_krpl'=>$this->input->post('namakrpl'),
				'kategori'=>$this->input->post('kategori'),
				'website'=>$this->input->post('alamatweb'),
				'no_hp'=>$this->input->post('nohp'),
				'alamat'=>$this->input->post('alamat'),
				'kota'=>$this->input->post('kota'),
				'provinsi'=>$this->input->post('provinsi'),
				'latitude'=>$this->input->post('latitude'),
				'longitude'=>$this->input->post('longitute'),
			); 
			//lakukan metode simpan lokasi
			if($this->krpl_model->update_krpl($this->input->post('id'),$update)){
				redirect(base_url()."lokasi");
			}
		}
		
		$data=array(
		'title'=>'KRPL - Data Lokasi',
		'dataajax'=>json_decode($this->krpl_model->get_gis_byid($id)),
		);
		$this->load->view('head',$data);
		$this->load->view('header');
		$this->load->view('update_lokasi');
		$this->load->view('footer');
		$this->load->view('foot');
	}
	public function delete_lokasi($id)
	{
		if($this->input->post('submit') == 'delete'){
			if($this->krpl_model->delete_krpl($this->input->post('id'))){
				redirect(base_url()."lokasi");
			}
		}
		$data=array(
		'title'=>'KRPL - Delete Lokasi',
		'dataajax'=>json_decode($this->krpl_model->get_gis_byid($id)),
		);
		$this->load->view('head',$data);
		$this->load->view('header');
		$this->load->view('delete_lokasi');
		$this->load->view('footer');
		$this->load->view('foot');
	}
	public function add_lokasi()
	{
		if($this->input->post('submit') == 'add'){
			$add=array(
				'nama_krpl'=>$this->input->post('namakrpl'),
				'kategori'=>$this->input->post('kategori'),
				'website'=>$this->input->post('alamatweb'),
				'no_hp'=>$this->input->post('nohp'),
				'alamat'=>$this->input->post('alamat'),
				'kota'=>$this->input->post('kota'),
				'provinsi'=>$this->input->post('provinsi'),
				'latitude'=>$this->input->post('latitude'),
				'longitude'=>$this->input->post('longitute'),
			); 
			//lakukan metode simpan lokasi
			if($this->krpl_model->insert_krpl($add)){
				redirect(base_url()."lokasi");
			}
		}
		$data=array(
		'title'=>'KRPL - Data Lokasi',
		);
		$this->load->view('head',$data);
		$this->load->view('header');
		$this->load->view('add_lokasi');
		$this->load->view('footer');
		$this->load->view('foot');
	}

}
