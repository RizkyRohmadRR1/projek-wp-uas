<?php 
	class ModelDaftar extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function simpan($val)
		{
			return $this->db->insert('tb_pegawai',$val);
		}
		public function save(){
			$data = array(
			  "nama" => $this->input->post('input_nama'),
			  "kelas" => $this->input->post('input_kelas'),
			  "alamat" => $this->input->post('input_alamat')
			);
			
			$this->db->insert('tb_pegawai', $data);
		}
		public function no()
		{
			return $this->db->query("SELECT max(id_user) AS kode FROM tb_pegawai");
		}
	}
 ?>