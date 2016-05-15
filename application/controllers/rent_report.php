<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


 /*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */

class Rent_report extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$data['instansi'] 	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
        $this->load->view('home/index',$data);
	}
	
	public function index()
	{
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		$data['judul1'] = "Rent Today";
        $data['judul2'] = "Rent This Month";
		$data['hariini']	= $this->db->query("SELECT trans.*, anggota.nama, buku.judul FROM trans LEFT JOIN anggota ON trans.id_anggota = anggota.id LEFT JOIN buku ON trans.id_buku = buku.id WHERE trans.tgl_pinjam = LEFT(NOW(), 10)")->result();
		$data['bulnini']	= $this->db->query("SELECT trans.*, anggota.nama, buku.judul FROM trans LEFT JOIN anggota ON trans.id_anggota = anggota.id LEFT JOIN buku ON trans.id_buku = buku.id WHERE MID(trans.tgl_pinjam, 6, 2) = MONTH(NOW())")->result();
		$this->load->view('report/rent', $data);
        
    }
    
    
	
	
	
    
	
	
	
}
