<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {
	function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$data['instansi'] 	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
		$data['page']			= "v_beranda";
		
		$this->load->view('app', $data);
	}
	
	public function post_pengunjung() {
		$nama		= addslashes($this->input->post('nama'));
		$jk			= addslashes($this->input->post('jk'));
		$jenis		= addslashes($this->input->post('jenis'));
		$perlu		= addslashes($this->input->post('perlu1'))."#".addslashes($this->input->post('perlu2'))."#".addslashes($this->input->post('perlu3'))."#".addslashes($this->input->post('perlu4'))."#".addslashes($this->input->post('perlu5'));
		$saran		= addslashes($this->input->post('saran'));
		
		$this->db->query("INSERT INTO pengunjung VALUES ('', '$nama', '$jk', '$jenis', '$perlu', '$saran', NOW())");
		$this->session->set_flashdata("k", "<div class=\"alert alert-info\">Terima kasih $nama, data Anda telah Masuk </div>");
		redirect('beranda');
	}
	
	public function profil() {
		$data['instansi'] 	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
		$data['data'] 		= $this->db->query("SELECT profil FROM config LIMIT 1")->row();
		$data['page']		= "v_profil";
		
		$this->load->view('app', $data);
	}
	
	public function cari_buku() {
		$data['instansi'] 	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
		
		$q 		= addslashes($this->input->post('q'));
		if ($this->uri->segment(3) == "cari") {
			$q_cari				= $this->db->query("SELECT * FROM buku WHERE judul LIKE '%$q%' OR pengarang LIKE '%$q%' OR penerbit LIKE '%$q%' OR deskripsi LIKE '%$q%'");
			$data['data'] 		= $q_cari->result();
			$this->session->set_flashdata("k", "<div class=\"alert alert-success\">Ditemukan ".$q_cari->num_rows()." data </div>");
		} else {
			$q_cari				= $this->db->query("SELECT * FROM buku ORDER BY id DESC LIMIT 10");
			$data['data'] 		= $q_cari->result();
			$this->session->set_flashdata("k", "<div class=\"alert alert-success\">Ditemukan ".$q_cari->num_rows()." data </div>");
		}
		
		$data['page']			= "v_cari";
		$this->load->view('app', $data);
	}
}