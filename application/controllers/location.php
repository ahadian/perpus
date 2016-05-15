<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


 /*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */

class Location extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("location_model");
        $data['instansi'] 	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
        $this->load->view('home/index',$data);
	}
	
	public function index()
	{
		$data['listlocation'] = $this->location_model->getAlllocation(); 
		$this->load->view('location/location_view', $data);
        
    }
	
	public function addlocation()
	{
		
		$this->load->view('location/add_location_view');
	}

	public function addlocationDb()
	{
		$data = array(
				'nama' => $this->input->post('nama')
				);
		$this->location_model->addlocation($data); 

		redirect('location'); 
	}

	public function updatelocation($id)
	{
		$data['location'] = $this->location_model->getlocation($id); 
        $this->load->view('location/update_location_view', $data);
	}

	public function updatelocationDb()
	{
		
        $data = array(
					'nama' => $this->input->post('nama')
    				);
        $location['id'] = $this->input->post('id');
        
		$this->location_model->updatelocation($data, $location);

		redirect('location');
	}

	public function deletelocationDb($id)
	{
		
        $this->location_model->deletelocation($id);
        redirect('location');
	}
	
    
	
	
	
}
