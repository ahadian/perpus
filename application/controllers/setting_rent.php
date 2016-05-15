<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


 /*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */

class Setting_Rent extends CI_Controller
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
		$data['judul'] = "Rent Setting";
		$data['data'] = $this->db->query("SELECT * FROM config LIMIT 1")->row();
		$this->load->view('settings/rent', $data);
        
    }
    
    public function save()
    {
        
        $id1	= $this->uri->segment(2);
		$id2	= $this->uri->segment(3);

		$idp			= addslashes($this->input->post('idp'));
		$denda			= addslashes($this->input->post('denda'));
		$maks_buku		= addslashes($this->input->post('maks_buku'));
		$maks_hari		= addslashes($this->input->post('maks_hari'));
        $data['data'] = $this->db->query("SELECT * FROM config LIMIT 1")->row();
        $this->db->query("UPDATE config SET denda = '$denda', maks_buku = '$maks_buku', maks_hari = '$maks_hari' WHERE id = '$idp'");
					
		$this->session->set_flashdata("k", "<div class=\"alert alert-info\">Data has been updated</div>");
		redirect('setting_rent');
        
    }
    
    
	
	
	
    
	
	
	
}
