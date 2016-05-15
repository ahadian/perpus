<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


 /*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */

class Author extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("author_model");
        $data['instansi'] 	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
        $this->load->view('home/index',$data);
	}
	
	public function index()
	{
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
        
        $data['data'] = $this->db->query("SELECT * FROM authors ORDER BY id DESC")->result(); 
		$this->load->view('author/author_view', $data);
        
    }
	
	public function addAuthor()
	{
		
		$this->load->view('author/add_author_view');
	}

	public function addAuthorDb()
	{
		$data = array(
				'name' => $this->input->post('name')
				);
		$this->author_model->addAuthor($data); 

		redirect('author'); 
	}

	public function updateAuthor($id)
	{
		$data['author'] = $this->author_model->getauthor($id); 
        $this->load->view('author/update_author_view', $data);
	}

	public function updateAuthorDb()
	{
		
        $data = array(
					'name' => $this->input->post('name')
    				);
        $condition['id'] = $this->input->post('id');
        
		$this->author_model->updateAuthor($data, $condition);

		redirect('author');
	}

	public function deleteAuthorDb($id)
	{
		
        $this->author_model->deleteAuthor($id);
        redirect('author');
	}
	
    
	
	
	
}
