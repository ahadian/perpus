<?php

/*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */
 
class Category_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function getAllcategory(){
	   
       $this->db->from("jenis");
       return $this->db->get();
	}
    
    function getcategory($id)
	{
		
        $this->db->where('id', $id);
        $this->db->select("*");
        $this->db->from("jenis");
        
        return $this->db->get();
	}

	function addcategory($data)
	{
		//untuk insert data ke database
		$this->db->insert('jenis', $data);
	}

	function updatecategory($data, $condition)
	{
			
        $this->db->where($condition);
        $this->db->update('jenis', $data);
	}

	function deletecategory($id)
	{
		//delete produk berdasarkan id
        $this->db->where('id', $id);
        $this->db->delete('jenis');
	}
    
    
}
