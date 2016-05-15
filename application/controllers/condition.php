<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


 /*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */

class Condition extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("condition_model");
        $data['instansi'] 	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
        $this->load->view('home/index',$data);
	}
	
	public function index()
	{
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
        
        $data['listcondition'] = $this->condition_model->getAllcondition(); 
		$this->load->view('condition/condition_view', $data);
        
    }
	
	public function addcondition()
	{
		
		$this->load->view('condition/add_condition_view');
	}

	public function addconditionDb()
	{
		$data = array(
				'nama' => $this->input->post('nama')
				);
		$this->condition_model->addcondition($data); 

		redirect('condition'); 
	}

	public function updatecondition($id)
	{
		$data['condition'] = $this->condition_model->getcondition($id); 
        $this->load->view('condition/update_condition_view', $data);
	}

	public function updateconditionDb()
	{
		
        $data = array(
					'nama' => $this->input->post('nama')
    				);
        $condition['id'] = $this->input->post('id');
        
		$this->condition_model->updatecondition($data, $condition);

		redirect('condition');
	}

	public function deleteconditionDb($id)
	{
		
        $this->condition_model->deletecondition($id);
        redirect('condition');
	}
	
    
	
	
	
}
