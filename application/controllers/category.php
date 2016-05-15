<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


 /*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */

class Category extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("category_model");
        $data['instansi'] 	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
        $this->load->view('home/index',$data);
	}
	
	public function index()
	{
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
        
        $data['listcategory'] = $this->category_model->getAllcategory(); 
		$this->load->view('category/category_view', $data);
        
    }
	
	public function addcategory()
	{
		
		$this->load->view('category/add_category_view');
	}

	public function addcategoryDb()
	{
		$data = array(
				'nama' => $this->input->post('nama')
				);
		$this->category_model->addcategory($data); 

		redirect('category'); 
	}

	public function updatecategory($id)
	{
		$data['category'] = $this->category_model->getcategory($id); 
        $this->load->view('category/update_category_view', $data);
	}

	public function updatecategoryDb()
	{
		
        $data = array(
					'nama' => $this->input->post('nama')
    				);
        $condition['id'] = $this->input->post('id');
        
		$this->category_model->updatecategory($data, $condition);

		redirect('category');
	}

	public function deletecategoryDb($id)
	{
		
        $this->category_model->deletecategory($id);
        redirect('category');
	}
	
    
	
	
	
}
