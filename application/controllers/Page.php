<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_Home');
	}

	public function index()
	{
		$data['produk']= $this->Model_Home->tampil_produk_3('produk')->result();
		$this->load->view('home', $data);
	}


	public function product()
	{
		$data['produk']= $this->Model_Home->tampil_produk('produk')->result();
		$this->load->view('produk', $data);
	}

	public function furniture()
	{
		$data['produk']= $this->Model_Home->furniture('produk')->result();
		$this->load->view('furniture', $data);
	}

	public function coffe()
	{
		$data['produk']= $this->Model_Home->kopi('produk')->result();
		$this->load->view('kopi', $data);
	}

	public function spices()
	{
		$data['produk']= $this->Model_Home->rempah('produk')->result();
		$this->load->view('rempah', $data);
	}

	public function detail($id)
	{
		$where = array('id' => $id);
		$data['produk']=$this->Model_Home->detail_produk('produk',$where)->result();
		$this->load->view('detail', $data);
	}


	public function contact()
	{
		$this->load->view('Kontak');
	}

	public function kontak_tambah()
	{
		$tanggal = date("Y-m-d H:i:s");
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$subjek = $_POST['subjek'];
		$pesan = $_POST['pesan'];
		$data = array(
			'tanggal'=>$tanggal,
			'nama'=>$nama,
			'email'=>$email,
			'subjek'=>$subjek,
			'pesan'=>$pesan
			);
		$this->Model_Home->tambah_kontak('kontak',$data);
		$this->session->set_flashdata('pesan',
		'<div class="alert alert-success" role="alert">
		your message has been sent 
		</div>'
		);
		redirect(base_url('contact'));
	}
	

}
