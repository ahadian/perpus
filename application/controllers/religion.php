<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


 /*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */

class Religion extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("religion_model");
        $data['instansi'] 	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
        $this->load->view('home/index',$data);
	}
	
	public function index()
	{
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
        
        $data['listreligion'] = $this->religion_model->getAllreligion(); 
		$this->load->view('religion/religion_view', $data);
        
    }
	
	public function addreligion()
	{
		
		$this->load->view('religion/add_religion_view');
	}

	public function addreligionDb()
	{
		$data = array(
				'agama' => $this->input->post('agama')
				);
		$this->religion_model->addreligion($data); 

		redirect('religion'); 
	}

	public function updatereligion($id)
	{
		$data['religion'] = $this->religion_model->getreligion($id); 
        $this->load->view('religion/update_religion_view', $data);
	}

	public function updatereligionDb()
	{
		
        $data = array(
					'agama' => $this->input->post('agama')
    				);
        $religion['id'] = $this->input->post('id');
        
		$this->religion_model->updatereligion($data, $religion);

		redirect('religion');
	}

	public function deletereligionDb($id)
	{
		
        $this->religion_model->deletereligion($id);
        redirect('religion');
	}
	
    
	
	
	
}
