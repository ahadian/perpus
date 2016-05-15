<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


 /*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */

class Book_Report extends CI_Controller
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
		$data['judul1'] = "Book Report";
        
		$data['jml'] = $this->db->query("SELECT * FROM buku")->num_rows();
        $data['data'] = $this->db->query("SELECT buku.*, lokasi.nama FROM buku LEFT JOIN lokasi ON buku.id_lokasi = lokasi.id")->result();
        $this->load->view('report/book', $data);
        
    }
    
    
	
	
	
    
	
	
	
}
