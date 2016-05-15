<?php

/*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */
 
class Condition_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function getAllcondition(){
	   
       $this->db->from("kondisi");
       return $this->db->get();
	}
    
    function getcondition($id)
	{
		
        $this->db->where('id', $id);
        $this->db->select("*");
        $this->db->from("kondisi");
        
        return $this->db->get();
	}

	function addcondition($data)
	{
		//untuk insert data ke database
		$this->db->insert('kondisi', $data);
	}

	function updatecondition($data, $condition)
	{
			
        $this->db->where($condition);
        $this->db->update('kondisi', $data);
	}

	function deletecondition($id)
	{
		//delete produk berdasarkan id
        $this->db->where('id', $id);
        $this->db->delete('kondisi');
	}
    
    
}
