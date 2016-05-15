<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


 /*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */

class Setting_Holiday extends CI_Controller
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
		$data['judul'] = "Holiday Setting";
		$data['data'] = $this->db->query("SELECT * FROM libur ORDER BY id DESC")->result();
		$this->load->view('settings/holiday', $data);
        
    }
    
    public function add()
    {
        $data['judul'] = "Add New Holiday";
		$this->load->view('settings/form_holiday', $data);
        
    }
    
    public function edit()
    {
        $id1					= $this->uri->segment(2);
		$id2					= $this->uri->segment(3);
        
        $data['judul'] = "Edit Holiday";
		$data['options'] = $this->db->query("SELECT * FROM libur WHERE id = '$id2'")->row();
        $this->load->view('settings/form_holiday', $data);
        
    }
    
    public function save()
    {
        $id1					= $this->uri->segment(2);
		$id2					= $this->uri->segment(3);

		$idp					= addslashes($this->input->post('idp'));
		$tanggal				= addslashes($this->input->post('tanggal'));
		$nama					= addslashes($this->input->post('nama'));
        
        $this->db->query("INSERT INTO libur VALUES ('', '$tanggal', '$nama')");
			
		$this->session->set_flashdata("k", "<div class=\"alert alert-info\">Data has been added</div>");
		redirect('setting_holiday');
        
    }
    
    public function update()
    {
        $idp					= addslashes($this->input->post('idp'));
		$tanggal				= addslashes($this->input->post('tanggal'));
		$nama					= addslashes($this->input->post('nama'));
        
        $this->db->query("UPDATE libur SET tanggal = '$tanggal', nama = '$nama' WHERE id = '$idp'");

        $this->session->set_flashdata("k", "<div class=\"alert alert-info\">Data has been updated</div>");			
		redirect('setting_holiday');
        
        $this->db->query("INSERT INTO libur VALUES ('', '$tanggal', '$nama')");
			
		$this->session->set_flashdata("k", "<div class=\"alert alert-info\">Data has been added</div>");
		redirect('setting_holiday');
        
    }
    
    public function delete()
    {
        $id1					= $this->uri->segment(2);
		$id2					= $this->uri->segment(3);
        
        $this->db->query("DELETE FROM libur WHERE id = '$id2'");

        $this->session->set_flashdata("k", "<div class=\"alert alert-info\">Data has been deleted</div>");			
		redirect('setting_holiday');
        
    }
    
    
	
	
	
    
	
	
	
}
