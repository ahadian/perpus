<?php

/*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */
 
class Gender_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function getAllGender(){
	   
       $this->db->from("gender");
       return $this->db->get();
	}
    
    function getGender($id)
	{
		
        $this->db->where('id', $id);
        $this->db->select("*");
        $this->db->from("gender");
        
        return $this->db->get();
	}

	function addGender($data)
	{
		//untuk insert data ke database
		$this->db->insert('gender', $data);
	}

	function updateGender($data, $condition)
	{
			
        $this->db->where($condition);
        $this->db->update('gender', $data);
	}

	function deleteGender($id)
	{
		//delete produk berdasarkan id
        $this->db->where('id', $id);
        $this->db->delete('gender');
	}
    
    
}
