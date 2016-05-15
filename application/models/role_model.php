<?php

/*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */
 
class Role_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function getAllRole(){
	   
       $this->db->from("role");
       return $this->db->get();
	}
    
    function getRole($id)
	{
		
        $this->db->where('id', $id);
        $this->db->select("*");
        $this->db->from("role");
        
        return $this->db->get();
	}

	function addRole($data)
	{
		//untuk insert data ke database
		$this->db->insert('role', $data);
	}

	function updateRole($data, $condition)
	{
			
        $this->db->where($condition);
        $this->db->update('role', $data);
	}

	function deleteRole($id)
	{
		//delete produk berdasarkan id
        $this->db->where('id', $id);
        $this->db->delete('role');
	}
    
    
}
