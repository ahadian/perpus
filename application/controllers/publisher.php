<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


 /*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */

class Publisher extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("publisher_model");
        $data['instansi'] 	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
        $this->load->view('home/index',$data);
	}
	
	public function index()
	{
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
        
        $data['data'] = $this->db->query("SELECT * FROM publishers ORDER BY id DESC")->result(); 
		$this->load->view('publisher/publisher_view', $data);
        
    }
	
	public function addPublisher()
	{
		
		$this->load->view('publisher/add_publisher_view');
	}

	public function addPublisherDb()
	{
		$data = array(
				'name' => $this->input->post('name')
				);
		$this->publisher_model->addPublisher($data); 

		redirect('publisher'); 
	}

	public function updatePublisher($id)
	{
		$data['publisher'] = $this->publisher_model->getPublisher($id); 
        $this->load->view('publisher/update_publisher_view', $data);
	}

	public function updatePublisherDb()
	{
		
        $data = array(
					'name' => $this->input->post('name')
 				     );
        $condition['id'] = $this->input->post('id');
        
		$this->publisher_model->updatePublisher($data, $condition);

		redirect('publisher');
	}

	public function deletePublisherDb($id)
	{
		
        $this->publisher_model->deletePublisher($id);
        redirect('publisher');
	}
	
    
	
	
	
}
