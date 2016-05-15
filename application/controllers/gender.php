<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


 /*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */

class Gender extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("gender_model");
        $data['instansi'] 	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
        $this->load->view('home/index',$data);
	}
	
	public function index()
	{
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
        
        $data['listGender'] = $this->gender_model->getAllGender(); 
		$this->load->view('gender/gender_view', $data);
        
    }
	
	public function addGender()
	{
		
		$this->load->view('gender/add_gender_view');
	}

	public function addGenderDb()
	{
		$data = array(
				'name' => $this->input->post('name'),
                'createddate' => $this->input->post('createddate'),
                'createduserid' => $this->input->post('createduserid')
				);
		$this->gender_model->addGender($data); 

		redirect('gender'); 
	}

	public function updateGender($id)
	{
		$data['gender'] = $this->gender_model->getGender($id); 
        $this->load->view('gender/update_gender_view', $data);
	}

	public function updateGenderDb()
	{
		
        $data = array(
					'name' => $this->input->post('name'),
                    'modifieddate' => $this->input->post('modifieddate'),
                    'modifieduserid' => $this->input->post('modifieduserid')
    				);
        $condition['id'] = $this->input->post('id');
        
		$this->gender_model->updateGender($data, $condition);

		redirect('gender');
	}

	public function deleteGenderDb($id)
	{
		
        $this->gender_model->deleteGender($id);
        redirect('gender');
	}
	
    
	
	
	
}
