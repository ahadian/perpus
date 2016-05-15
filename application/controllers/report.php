<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


 /*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */

class Report extends CI_Controller
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
		$data['judul1'] = "Today Visitors/Gender";
        $data['judul2'] = "Today Visitors/Purposes";
        $data['judul3'] = "Monthly Visitors/Gender";
        $data['judul4'] = "Monthly Visitors/Purposes";
		$this->load->view('report/visitor', $data);
        
    }
    
    
	
	
	
    
	
	
	
}
