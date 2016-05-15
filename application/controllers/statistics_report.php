<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


 /*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */

class Statistics_Report extends CI_Controller
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
		$data['judul1'] = "Statistics Report";
        
		$data['buku_paling_banyak_dipinjam'] = $this->db->query(
                                            "SELECT trans.id_buku, COUNT(trans.id_buku) AS jumlah_pinjam, 
                                            buku.judul FROM trans LEFT JOIN buku ON trans.id_buku = buku.id 
                                            GROUP BY trans.id_buku ORDER BY jumlah_pinjam DESC")->result();
                                            
		$data['anggota_paling_banyak_meminjam'] = $this->db->query(
                                            "SELECT trans.id_anggota, COUNT(trans.id_anggota) AS jumlah_pinjam, 
                                            anggota.nama FROM trans LEFT JOIN anggota ON trans.id_anggota = anggota.id 
                                            GROUP BY trans.id_anggota ORDER BY jumlah_pinjam DESC")->result();
                                            
        $this->load->view('report/statistics', $data);
        
    }
    
    
	
	
	
    
	
	
	
}
