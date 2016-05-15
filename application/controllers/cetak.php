<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cetak extends CI_Controller {
	function __construct() {
		parent::__construct();
	}
	
	public function index() {
		if($this->session->userdata('validated') == FALSE){
            redirect('login');
        }
		
		echo "Halaman Cetak";
	}
	
	public function visitor_monthly() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		$data['bulan'] = str_pad($this->uri->segment(3), 2, '0', STR_PAD_LEFT);
		
		$this->load->view('cetak/visitor_monthly', $data);
	}
	
	public function visitor_daily() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		$this->load->view('cetak/visitor_daily');
	}
	
	
	public function rent() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		$tipe = $this->uri->segment(3);
		
		if ($tipe == "daily") {
			$data['data']	= $this->db->query("SELECT * FROM trans WHERE tgl_pinjam = LEFT(NOW(), 10)")->result();
			$data['title']	= "Today (".date('d F Y').")";
		} else if ($tipe == "monthly") {
			$data['data']	= $this->db->query("SELECT * FROM trans WHERE MID(tgl_pinjam, 6, 2) = MONTH(NOW())")->result();
			$data['title']	= "This Month (".date('F Y').")";
		}
		
		$this->load->view('cetak/rent', $data);
	}
	
	public function book() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		$data['data']	= $this->db->query("SELECT * FROM buku")->result();
		$this->load->view('cetak/book', $data);
	}
	
	public function member() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		$data['data']	= $this->db->query("SELECT * FROM anggota WHERE stat = '1'")->result();
		$this->load->view('cetak/member', $data);
	}
}