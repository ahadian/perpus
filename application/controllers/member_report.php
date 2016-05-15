<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


 /*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */

class Member_Report extends CI_Controller
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
		$data['judul1'] = "Member Report";
        
		$data['jml'] = $this->db->query("SELECT * FROM anggota WHERE stat = '1'")->num_rows();
        $data['data'] = $this->db->query("SELECT * FROM anggota WHERE stat = '1'")->result();
        $this->load->view('report/member', $data);
        
    }
    
    
	
	
	
    
	
	
	
}
