<?php

/*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */
 
class Publisher_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function getAllPublisher(){
	   
        $this->db->select('*');
        $this->db->from('publishers');
        //$this->db->join('gender', 'gender.id = publisher.gender');
        //$this->db->join('role', 'role.id = publisher.role');
        $query = $this->db->get();
        return $query->result();
	}
    
    function getPublisher($id)
	{
		
        $this->db->where('id', $id);
        $this->db->select("*");
        $this->db->from("publishers");
        
        return $this->db->get();
	}

	function addPublisher($data)
	{
		//untuk insert data ke database
		$this->db->insert('publishers', $data);
	}

	function updatePublisher($data, $condition)
	{
			
        $this->db->where($condition);
        $this->db->update('publishers', $data);
	}

	function deletePublisher($id)
	{
		//delete produk berdasarkan id
        $this->db->where('id', $id);
        $this->db->delete('publishers');
	}
    
    function getProvince()
	{
		$this->db->from("province");
        $this->db->order_by("name","asc");
        return $this->db->get();
	}
    
    function getCountry()
	{
		$this->db->from("countries");
        $this->db->order_by("name","asc");
        return $this->db->get();
	}
    
    
    
    
}
