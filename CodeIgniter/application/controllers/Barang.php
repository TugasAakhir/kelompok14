<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {



	 public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		$this->load->model('Barang_Model');
	 	}


	public function index()
	{
		$data['list_barang']=$this->Barang_Model->get_all_barang();
		$data['nama_kategori']=$this->Barang_Model->get_nama_kategori();
		
		$this->load->view('admin/barang_view',$data);
	}
	public function barang_add()
		{
			
			$kategori=$this->Barang_Model->get_nama_kategori_by_id($this->input->post('idKategori'));
				foreach ($kategori as $k ) {
					$kategori=$k;
			}
			 	$config['upload_path']          = './assets/uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100000000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('foto'))
                {
                        $barang = array('error' => $this->upload->display_errors());
                }
                else
                {
						$data = array(
							'idKategori' => $kategori,
							'namaBarang' => $this->input->post('namaBarang'),
							'deskripsi' => $this->input->post('deskripsi'),
							'warna' => $this->input->post('warna'),
							'berat' => $this->input->post('berat'),
							'jumlah' => $this->input->post('jumlah'),
							'harga' => $this->input->post('harga'),
							'foto' => $this->upload->data('file_name')
						);
                        $insert = $this->Barang_Model->barang_add($data);
                       
                }
                 redirect('barang/index');
				
			//echo json_encode(array("status" => TRUE));
			

		}
		public function ajax_edit($id)
		{
			$data = $this->Barang_Model->get_by_id($id);
			echo json_encode($data);
		}

		public function barang_update()
		{
			$kategori=$this->Barang_Model->get_nama_kategori_by_id($this->input->post('idKategori'));
				foreach ($kategori as $k ) {
					$kategori=$k;
			}
				$config['upload_path']          = './assets/uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100000000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('foto'))
                {
                    $data = array('error' => $this->upload->display_errors());

                }
                else
                {
					$data = array(
							'idKategori' => $kategori,
							'namaBarang' => $this->input->post('namaBarang'),
							'deskripsi' => $this->input->post('deskripsi'),
							'warna' => $this->input->post('warna'),
							'berat' => $this->input->post('berat'),
							'jumlah' => $this->input->post('jumlah'),
							'harga' => $this->input->post('harga'),
							'foto' => $this->upload->data('file_name')
						);
                        $this->Barang_Model->barang_update(array('idBarang' => $this->input->post('idBarang')), $data);
                      
                }
                  $data['list_barang']=$this->Barang_Model->get_all_barang();
						$data['nama_kategori']=$this->Barang_Model->get_nama_kategori();
                         $this->load->view('admin/barang_view',$data);
			
			
			//echo json_encode(array("status" => TRUE));
		}

	public function barang_delete($id)
	{
		$this->Barang_Model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	public function createPdf()
	{
		$this->load->library('pdf');
		
		$data['list_barang']=$this->Barang_Model->get_all_barang();
		$data['nama_kategori']=$this->Barang_Model->get_nama_kategori();
		
		$this->pdf->load_view('admin/print', $data);
	}

	public function lol()
	{
		$data['list_barang']=$this->Barang_Model->get_all_barang();
		$data['nama_kategori']=$this->Barang_Model->get_nama_kategori();
		
		$this->load->view('admin/print', $data);
	}

}
