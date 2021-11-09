<?php
class Admin extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_Admin');
		
		if($this->session->userdata('status')!= "login"){
			redirect(base_url('login'));
		}
	}
	
	function index(){
		$data['furniture'] =  $this->Model_Admin->furniture('produk');
		$data['coffe'] =  $this->Model_Admin->coffe('produk');
		$data['spices'] =  $this->Model_Admin->spices('produk');
		$data['produk'] =  $this->Model_Admin->rows_produk('produk');
		$data['kontak'] =  $this->Model_Admin->rows_kontak('kontak');
		$this->load->view('Admin/dashboard', $data);
	}



	function inbox()
	{
		$data['pesan']= $this->Model_Admin->tampil_inbox('kontak')->result();
		$this->load->view('Admin/contact',$data);
	}

	function hapus_inbox($id)
	{
		$where = array('id'=>$id);
		$this->Model_Admin->hapus_inbox('kontak',$where);
		$this->session->set_flashdata('hapus',
							'<div class="alert alert-success alert-dismissible fade show" role="alert">
							successfully deleted message 
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>'
							);
			redirect(base_url('Admin/inbox'));
	}



	function product()
	{
		$data['produk']= $this->Model_Admin->tampil_produk('produk')->result();
		$this->load->view('Admin/product', $data);

	}

	function hapus_produk($id)
	{
		$where = array('id'=>$id);
		$this->Model_Admin->hapus_inbox('produk',$where);
		$this->session->set_flashdata('hapus',
							'<div class="alert alert-success alert-dismissible fade show" role="alert">
							successfully deleted product 
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>'
							);
			redirect(base_url('Admin/product'));
	}



	function add_product()
	{
		$this->load->view('Admin/add_product', array('error' => ' ' ));
	}

	public function tambah_produk()
	{
		 		 $config['upload_path']          = './assets/gambar';
         $config['allowed_types']        = 'img|png|jpeg|gif|jpg';
         $config['max_size']             = 10000000;
         $config['max_width']            = 10240;
         $config['max_height']           = 7680;
         $this->load->library('upload', $config);
         if ( ! $this->upload->do_upload('foto')){
								$error = array('error' => $this->upload->display_errors());
								$this->load->view('Admin/add_product', $error);
				}else{
								$data = array('foto' => $this->upload->data());
								$uploadData = $this->upload->data();
								$hasil = $uploadData['file_name'];
								$data = array(
								'nama' => $this->input->post('nama'),
								'harga' => $this->input->post('harga'),
								'kategori' => $this->input->post('kategori'),
								'wa' => $this->input->post('wa'),
								'deskripsi' => $this->input->post('deskripsi'),
								'gambar' => $hasil,
							);

							$this->db->insert('produk',$data);
							$this->session->set_flashdata('sukses',
							'<div class="alert alert-success alert-dismissible fade show" role="alert">
							successfully added product 
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>'
							);
							redirect(base_url('Admin/product'));
				}                     
	}


	
	function edit_product($id)
	{
		$where = array('id' => $id);
		$data['produk']=$this->Model_Admin->detail_produk('produk',$where)->result();
		$this->load->view('Admin/edit_product', $data);
	}

	public function edit_produk($id)
	{
						$where = array('id' => $id);
								$data = array(
								'nama' => $this->input->post('nama'),
								'harga' => $this->input->post('harga'),
								'kategori' => $this->input->post('kategori'),
								'wa' => $this->input->post('wa'),
								'deskripsi' => $this->input->post('deskripsi'),
							);

							$this->db->update('produk',$data,$where);
							$this->session->set_flashdata('edit',
							'<div class="alert alert-success alert-dismissible fade show" role="alert">
							successfully edit product 
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>'
							);
							redirect(base_url('Admin/product'));
	}                     
	
}