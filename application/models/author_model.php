<?php

/*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */
 
class Author_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function getAllAuthor(){
	   
        $this->db->select('*');
        $this->db->from('authors');
        $query = $this->db->get();
        return $query->result();
	}
    
    function getAuthor($id)
	{
		
        $this->db->where('id', $id);
        $this->db->select("*");
        $this->db->from("authors");
        
        return $this->db->get();
	}

	function addAuthor($data)
	{
		//untuk insert data ke database
		$this->db->insert('authors', $data);
	}

	function updateAuthor($data, $condition)
	{
			
        $this->db->where($condition);
        $this->db->update('authors', $data);
	}

	function deleteAuthor($id)
	{
		//delete produk berdasarkan id
        $this->db->where('id', $id);
        $this->db->delete('authors');
	}
    
    
    
    
}
