<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		
	}
	
	public function index()
	{
		$data['barang']=$this->Admin_model->getAllbarang();
		$this->load->view('admin/data_barang_view',$data);
		
	}

	public function data_pembeli()
	{
		$this->load->view('admin/data_pembeli');
	}

	public function nota()
	{
		$this->load->view('admin/pemesanan_view');
		
	}

	public function tambah()
	{
		$data['kategori']=$this->Admin_model->getAllkategori();
		$this->load->view('admin/tambah_view');
	}
}

/* End of file Admin.php */

?>