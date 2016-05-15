<?php

/*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */
 
class Book_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function getAllBook(){
	   
        $this->db->select('*');
        $this->db->from('buku');
        $query = $this->db->get();
        return $query->result();
	}
    
    function getBook($id)
	{
		
        $this->db->where('id', $id);
        $this->db->select("*");
        $this->db->from("buku");
        
        return $this->db->get();
	}

	function addBook($data)
	{
		//untuk insert data ke database
		$this->db->insert('buku', $data);
	}

	function updateBook($data, $condition)
	{
			
        $this->db->where($condition);
        $this->db->update('buku', $data);
	}

	function deleteBook($id)
	{
		//delete produk berdasarkan id
        $this->db->where('id', $id);
        $this->db->delete('buku');
	}
    
    function getAuthor()
	{
		$this->db->from("authors");
        $this->db->order_by("name","asc");
        return $this->db->get();
	}
    
    function getPublisher()
	{
		$this->db->from("publishers");
        $this->db->order_by("name","asc");
        return $this->db->get();
	}
    
    function getTitles()
	{
		$this->db->select("isbn,title");
        $this->db->from('buku');
        $this->db->order_by("title","asc");
        return $this->db->get();
	}
    
    function getCategory()
	{
		$this->db->select("*");
        $this->db->from('jenis');
        $this->db->order_by("nama","asc");
        return $this->db->get();
	}
    
    function getLocation()
	{
		$this->db->select("*");
        $this->db->from('lokasi');
        $this->db->order_by("nama","asc");
        return $this->db->get();
	}
    
    function getKondisi()
	{
		$this->db->select("*");
        $this->db->from('kondisi');
        $this->db->order_by("nama","asc");
        return $this->db->get();
	}
    
    
}
