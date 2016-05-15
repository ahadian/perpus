<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


 /*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */

class Book extends CI_Controller
{
	
    
    function __construct()
	{
		parent::__construct();
        
		$this->load->model("book_model");
        $data['instansi'] 	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
        $this->load->view('home/index',$data);
	}
	
	
    public function index()
	{
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
        
        $data['data'] = $this->db->query("SELECT * FROM buku ORDER BY id DESC")->result(); 
		$this->load->view('book/book_view', $data);
        
    }
	
	public function addBook()
	{
		
		$this->load->view('book/add_book_view');
        
	}

	public function addBookDb()
	{
		
        $data = array(
				    'id_jenis' => $this->input->post('id_jenis'),
                    'isbn' => $this->input->post('isbn'),
                    'judul' => $this->input->post('judul'),
                    'pengarang' => $this->input->post('pengarang'),
                    'penerbit' => $this->input->post('penerbit'),
                    'th_terbit' => $this->input->post('th_terbit'),
                    'harga' => $this->input->post('harga'),
                    'stat' => $this->input->post('stat'),
                    'id_lokasi' => $this->input->post('id_lokasi'),
                    'deskripsi' => $this->input->post('deskripsi')
				);
	
        $this->book_model->addBook($data); 

		redirect('book'); 
	}

	public function updateBook($id)
	{
		$data['book'] = $this->book_model->getBook($id); 
        $this->load->view('book/update_book_view', $data);
	}

	public function updateBookDb()
	{
		
        $data = array(
					'id_jenis' => $this->input->post('id_jenis'),
                    'isbn' => $this->input->post('isbn'),
                    'judul' => $this->input->post('judul'),
                    'pengarang' => $this->input->post('pengarang'),
                    'penerbit' => $this->input->post('penerbit'),
                    'th_terbit' => $this->input->post('th_terbit'),
                    'harga' => $this->input->post('harga'),
                    'stat' => $this->input->post('stat'),
                    'id_lokasi' => $this->input->post('id_lokasi'),
                    'deskripsi' => $this->input->post('deskripsi')
    				);
        $condition['id'] = $this->input->post('id');
        
		$this->book_model->updateBook($data, $condition);

		redirect('book');
	}

	public function deleteBookDb($id)
	{
		
        $this->book_model->deleteBook($id);
        redirect('book');
	}
	
    function popup()
	{
		$data['book_data'] = $this->book_model->getAllBook();
		$this->load->view('book/popup', $data);
	}
	
	
	
}
