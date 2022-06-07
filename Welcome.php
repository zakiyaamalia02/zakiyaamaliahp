<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
{
	parent::__construct();
	$this->load->model('M_Mahasiswa');
}

	public function index()
	{
		$panggilMahasiswa = $this->M_Mahasiswa->getDataMahasiswa();
		$Data = array('panggilMahasiswa' => $panggilMahasiswa);
		$this->load->view('welcome_message', $Data);

	}

    public function tambah() 
    {
    	this-> load->view('tambahmahasiswa');
    }

}

	