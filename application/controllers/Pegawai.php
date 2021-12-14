<?php 
	class Pegawai extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('modelpegawai');
		}
		public function p()
		{
			$p = $this->uri->segment(3);
			$data['folder'] = "pegawai";
			$data['p'] = $p;
			$data['title'] = "Data pegawai";

			if ($p == "data") {
				$data['val'] = $this->modelpegawai->show('tb_pegawai')->result();
				$this->load->view('index',$data);
			}elseif($p == "input"){
				$id = $this->uri->segment(4);
				if (empty($id)) {
					//No otomatis
					$qr = $this->modelpegawai->no()->row_array();
					$kode = $qr['kode'];
					$nu = (int) substr($kode, 6,9);
					$nu++;
					$tgl = date('y');
					$data['no'] = "USR".$tgl.sprintf('%04s',$nu);

					$data['title'] = "input Data pegawai";
					$data['btn'] = "SIMPAN";
					$data['url'] = "pegawai/simpan";
					$this->load->view('index',$data);
				}else{
					$data['title'] = "Edit data pegawai";
					$data['btn'] = "EDIT";
					$data['url'] = "pegawai/edit";
					$data['val'] = $this->modelpegawai->showall("tb_pegawai","WHERE id_user = '$id' ");
					$this->load->view('index',$data);
				}
			}
		}
		public function simpan()
		{
			$data = array(
				'id_user' => $this->input->post('id_user'),
				'nama' => $this->input->post('nama'),
				'password' => base64_encode($this->input->post('password')),
				'level' => $this->input->post('level')
			);
			$this->modelpegawai->simpan($data);
			redirect('pegawai/p/data');
		}
		public function edit()
		{
			$id = $this->input->post('id_user');
			$data = array(
				'nama' => $this->input->post('nama'),
				'password' => base64_encode($this->input->post('password')),
				'level' => $this->input->post('level')
			);
			$this->modelpegawai->edit($id,$data);
			redirect('pegawai/p/data');
		}
		public function hapus($id)
		{
			$this->modelpegawai->hapus('tb_pegawai',$id);
			redirect('pegawai/p/data');
		}
	}
 ?>