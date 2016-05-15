<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


 /*
 *
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */

class Role extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("role_model");
        $data['instansi'] 	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
        $this->load->view('home/index',$data);
	}
	
	public function index()
	{
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
        
        $data['listRole'] = $this->role_model->getAllRole(); 
		$this->load->view('role/role_view', $data);
        
    }
	
	public function addRole()
	{
		
		$this->load->view('role/add_role_view');
	}

	public function addRoleDb()
	{
		$data = array(
				'name' => $this->input->post('name'),
                'createddate' => $this->input->post('createddate'),
                'createduserid' => $this->input->post('createduserid')
				);
		$this->role_model->addRole($data); 

		redirect('role'); 
	}

	public function updateRole($id)
	{
		$data['role'] = $this->role_model->getRole($id); 
        $this->load->view('role/update_role_view', $data);
	}

	public function updateRoleDb()
	{
		
        $data = array(
					'name' => $this->input->post('name'),
                    'modifieddate' => $this->input->post('modifieddate'),
                    'modifieduserid' => $this->input->post('modifieduserid')
    				);
        $condition['id'] = $this->input->post('id');
        
		$this->role_model->updateRole($data, $condition);

		redirect('role');
	}

	public function deleteRoleDb($id)
	{
		
        $this->role_model->deleteRole($id);
        redirect('role');
	}
	
    
	
	
	
}
