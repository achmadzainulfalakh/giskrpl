<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagenotfound extends CI_Controller {

	/**
	 * Kelas ini akan di panggil ketika tidak ada 
	 * halaman yang di maksudkan atau memang disembunyikan
	 */
	public function index()
	{
		$data=array(
			'title'=>'Page Not Found',
		);
		$this->load->view('pagenotfound',$data);
	}
}
